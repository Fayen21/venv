(function () {
	'use strict';

	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/**
	 * Fabrique les deux helpers partagés par tous les effets, scopés à UN canvas :
	 *  - setup(cv) : contexte 2D + état {w,h} tenu à jour via ResizeObserver, dpr plafonné à 2.
	 *  - loop(fn)  : boucle rAF unique, démarrée/coupée par IntersectionObserver (visible
	 *                uniquement), jamais démarrée si prefers-reduced-motion (un seul appel
	 *                statique de fn() à la place).
	 * destroy() coupe tout (rAF, IntersectionObserver, ResizeObserver) — appelé au pagehide.
	 */
	function makeHelpers(cv) {
		var dpr = Math.min(window.devicePixelRatio || 1, 2);
		var ctx = cv.getContext('2d');
		var st = { w: 1, h: 1 };
		var drawFn = null;

		function resize() {
			var r = cv.getBoundingClientRect();
			if (!r.width) return;
			st.w = r.width;
			st.h = r.height;
			cv.width = Math.round(st.w * dpr);
			cv.height = Math.round(st.h * dpr);
			ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
			// changer width/height réinitialise le raster du canvas : en mode
			// reduced-motion (aucune boucle rAF pour re-peindre), il faut redessiner
			// la frame statique à chaque resize, y compris le premier callback
			// asynchrone du ResizeObserver qui suit toujours l'appel synchrone ci-dessous.
			if (reduceMotion && drawFn) drawFn();
		}
		resize();
		var ro = new ResizeObserver(resize);
		ro.observe(cv);

		function setup() {
			return { ctx: ctx, st: st };
		}

		var raf = null;
		var visible = false;

		function frame() {
			if (!drawFn) return;
			drawFn();
			raf = requestAnimationFrame(frame);
		}
		function start() {
			if (raf || reduceMotion || !drawFn) return;
			raf = requestAnimationFrame(frame);
		}
		function stop() {
			if (raf) cancelAnimationFrame(raf);
			raf = null;
		}

		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				visible = entry.isIntersecting;
				if (visible) start();
				else stop();
			});
		}, { threshold: 0 });
		io.observe(cv);

		function loop(fn) {
			drawFn = fn;
			if (reduceMotion) {
				fn(); // rendu statique unique, jamais de rAF
				return;
			}
			if (visible) start();
		}

		function destroy() {
			stop();
			io.disconnect();
			ro.disconnect();
			drawFn = null;
		}

		return { setup: setup, loop: loop, destroy: destroy };
	}

	// ==========================================================
	// Effets — chacun reçoit (cv, wrap, setup, loop) déjà scopés
	// à son propre canvas par le dispatcher plus bas.
	// ==========================================================

	var effects = {};

	// network — accueil + effet par défaut
	effects.network = function (cv, wrap, setup, loop) {
		var ctx = setup(cv).ctx, st = setup(cv).st;
		var r = setup(cv); ctx = r.ctx; st = r.st;
		var N = window.innerWidth < 768 ? 22 : 55; // divise par 2.5 sur mobile
		var pts = [];
		for (var i = 0; i < N; i++) {
			pts.push({ x: Math.random(), y: Math.random(), vx: (Math.random() - 0.5) * 0.0004, vy: (Math.random() - 0.5) * 0.0004 });
		}
		loop(function () {
			ctx.clearRect(0, 0, st.w, st.h);
			for (var i = 0; i < N; i++) {
				var p = pts[i];
				p.x += p.vx; p.y += p.vy;
				if (p.x < 0 || p.x > 1) p.vx *= -1;
				if (p.y < 0 || p.y > 1) p.vy *= -1;
			}
			for (var i = 0; i < N; i++) {
				for (var j = i + 1; j < N; j++) {
					var a = pts[i], b = pts[j];
					var dx = (a.x - b.x) * st.w, dy = (a.y - b.y) * st.h;
					var d = Math.hypot(dx, dy);
					if (d < 150) {
						ctx.strokeStyle = 'rgba(90,175,255,' + (1 - d / 150) * 0.6 + ')';
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(a.x * st.w, a.y * st.h);
						ctx.lineTo(b.x * st.w, b.y * st.h);
						ctx.stroke();
					}
				}
			}
			for (var i = 0; i < N; i++) {
				var p = pts[i];
				ctx.fillStyle = 'rgba(180,220,255,1)';
				ctx.beginPath();
				ctx.arc(p.x * st.w, p.y * st.h, 2.1, 0, 7);
				ctx.fill();
			}
		});
	};

	// globe — Solutions
	effects.globe = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var M = window.innerWidth < 768 ? 60 : 150; // divise par 2.5 sur mobile
		var pts = [];
		for (var i = 0; i < M; i++) {
			var y = 1 - (i / (M - 1)) * 2;
			var rad = Math.sqrt(1 - y * y);
			var t = i * 2.399963;
			pts.push({ x: Math.cos(t) * rad, y: y, z: Math.sin(t) * rad });
		}
		var ang = 0;
		var rScale = 1;
		var engage = 0; // 0..1 : monte tant qu'on reste proche du centre, débloque une vitesse de pointe plus haute
		var mx = -9999, my = -9999;
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			mx = e.clientX - rect.left;
			my = e.clientY - rect.top;
		});
		wrap.addEventListener('pointerleave', function () { mx = my = -9999; });
		loop(function () {
			var baseR = Math.min(st.w, st.h) * 0.42, cx = st.w * 0.72, cy = st.h * 0.5;
			var dist = Math.hypot(mx - cx, my - cy);
			var prox = Math.max(0, Math.min(1, 1 - dist / baseR));
			engage = prox > 0.15 ? Math.min(1, engage + 0.01) : Math.max(0, engage - 0.02);
			var maxBoost = 0.012 + engage * 0.010;
			var speedDelta = prox * maxBoost;
			var speedNorm = Math.min(1, speedDelta / 0.022); // 0..1, utilisé pour l'intensité lumineuse
			rScale += (1 + prox * 0.22 - rScale) * 0.08;
			ang += 0.0035 + speedDelta;
			var R = baseR * rScale;
			ctx.clearRect(0, 0, st.w, st.h);
			var pr = pts.map(function (p) {
				var x = p.x * Math.cos(ang) - p.z * Math.sin(ang);
				var z = p.x * Math.sin(ang) + p.z * Math.cos(ang);
				return { sx: cx + x * R, sy: cy + p.y * R, depth: (z + 1) / 2 };
			});
			for (var i = 0; i < M; i++) {
				for (var j = i + 1; j < M; j++) {
					var a = pr[i], b = pr[j];
					var d = Math.hypot(a.sx - b.sx, a.sy - b.sy);
					if (d < R * 0.36) {
						var lineA = Math.min(1, (1 - d / (R * 0.36)) * 0.5 * ((a.depth + b.depth) / 2) * (1 + speedNorm * 0.5));
						ctx.strokeStyle = 'rgba(90,170,255,' + lineA + ')';
						ctx.lineWidth = 1;
						ctx.beginPath();
						ctx.moveTo(a.sx, a.sy);
						ctx.lineTo(b.sx, b.sy);
						ctx.stroke();
					}
				}
			}
			for (var i = 0; i < pr.length; i++) {
				var p = pr[i];
				var dotA = Math.min(1, (0.25 + p.depth * 0.75) * (1 + speedNorm * 0.6));
				ctx.fillStyle = 'rgba(150,205,255,' + dotA + ')';
				ctx.beginPath();
				ctx.arc(p.sx, p.sy, 0.7 + p.depth * 1.8, 0, 7);
				ctx.fill();
			}
		});
	};

	// flow — Réalisations
	effects.flow = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var N = window.innerWidth < 768 ? 360 : 900; // divise par 2.5 sur mobile
		var ps = [];
		for (var i = 0; i < N; i++) {
			ps.push({ x: Math.random(), y: Math.random(), c: Math.random() < 0.22 ? '221,140,70' : '90,165,255' });
		}
		var t = 0;
		var frameN = 0;
		var cometCycle = 360; // ~6s à 60fps
		var cometCycleIdx = -1;
		var cometStart = { x: 0, y: 0 }, cometEnd = { x: 1, y: 1 };
		// point aléatoire sur un bord étendu (légèrement hors cadre pour une
		// entrée/sortie naturelle) — sert à tirer un nouveau trajet de comète.
		function randEdgePoint() {
			var m = -0.15, M = 1.15, edge = Math.floor(Math.random() * 4), rt = Math.random();
			if (edge === 0) return { x: m + (M - m) * rt, y: m };
			if (edge === 1) return { x: M, y: m + (M - m) * rt };
			if (edge === 2) return { x: m + (M - m) * rt, y: M };
			return { x: m, y: m + (M - m) * rt };
		}
		function newCometPath() {
			cometStart = randEdgePoint();
			var tries = 0;
			do {
				cometEnd = randEdgePoint();
				tries++;
			} while (tries < 6 && Math.hypot(cometEnd.x - cometStart.x, cometEnd.y - cometStart.y) < 0.6);
		}
		loop(function () {
			t += 0.0016;
			frameN++;
			ctx.fillStyle = 'rgba(4,11,27,.05)';
			ctx.fillRect(0, 0, st.w, st.h);
			for (var i = 0; i < N; i++) {
				var p = ps[i];
				var a = (Math.sin(p.x * 6 + t * 4) + Math.cos(p.y * 6 - t * 3)) * Math.PI;
				p.x += Math.cos(a) * 0.0013;
				p.y += Math.sin(a) * 0.0013;
				if (p.x < 0) p.x = 1;
				if (p.x > 1) p.x = 0;
				if (p.y < 0) p.y = 1;
				if (p.y > 1) p.y = 0;
				ctx.fillStyle = 'rgba(' + p.c + ',.5)';
				ctx.fillRect(p.x * st.w, p.y * st.h, 1.5, 1.5);
			}
			// comète : traverse le hero toutes les ~6s selon un trajet aléatoire
			// (tiré à chaque nouveau cycle), traînée en dégradé qui s'estompe
			// grâce au fondu de fond ci-dessus.
			var cycleIdx = Math.floor(frameN / cometCycle);
			if (cycleIdx !== cometCycleIdx) {
				cometCycleIdx = cycleIdx;
				newCometPath();
			}
			var cp = (frameN % cometCycle) / cometCycle;
			var cx = (cometStart.x + (cometEnd.x - cometStart.x) * cp) * st.w;
			var cy = (cometStart.y + (cometEnd.y - cometStart.y) * cp) * st.h;
			var glow = ctx.createRadialGradient(cx, cy, 0, cx, cy, 18);
			glow.addColorStop(0, 'rgba(255,255,255,.95)');
			glow.addColorStop(0.35, 'rgba(150,205,255,.55)');
			glow.addColorStop(1, 'rgba(150,205,255,0)');
			ctx.fillStyle = glow;
			ctx.beginPath();
			ctx.arc(cx, cy, 18, 0, 7);
			ctx.fill();
			ctx.fillStyle = 'rgba(255,255,255,.95)';
			ctx.beginPath();
			ctx.arc(cx, cy, 1.5, 0, 7);
			ctx.fill();
		});
	};

	// constellation — À propos (parallaxe souris + onde)
	effects.constellation = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var layers = [{ n: 26, d: 0.4, s: 1.2 }, { n: 24, d: 0.7, s: 1.7 }, { n: 20, d: 1.1, s: 2.3 }];
		layers.forEach(function (L) {
			L.pts = [];
			for (var i = 0; i < L.n; i++) {
				L.pts.push({ x: Math.random(), y: Math.random(), vx: (Math.random() - 0.5) * 0.0003, vy: (Math.random() - 0.5) * 0.0003 });
			}
		});
		var m = { x: 0.5, y: 0.5 };
		var t = 0;
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			m.x = (e.clientX - rect.left) / rect.width;
			m.y = (e.clientY - rect.top) / rect.height;
		});
		loop(function () {
			t++;
			ctx.clearRect(0, 0, st.w, st.h);
			var ox = m.x - 0.5, oy = m.y - 0.5;
			// pulsar central — cercle net (pas déformé), calculé avant les couches
			// pour que l'onde puisse pousser/illuminer les particules qu'elle
			// traverse au passage (déformation de ce qu'elle touche, pas d'elle-même).
			var cx = st.w * 0.5, cy = st.h * 0.5;
			var minSide = Math.min(st.w, st.h);
			var pr = (t % 160) / 160;
			var ringRadius = pr * minSide * 0.62;
			var pushBand = 50;
			for (var li = 0; li < layers.length; li++) {
				var L = layers[li];
				var px = ox * L.d * 60, py = oy * L.d * 60, sc = [];
				for (var i = 0; i < L.pts.length; i++) {
					var p = L.pts[i];
					p.x += p.vx; p.y += p.vy;
					if (p.x < 0 || p.x > 1) p.vx *= -1;
					if (p.y < 0 || p.y > 1) p.vy *= -1;
					sc.push({ x: p.x * st.w + px, y: p.y * st.h + py, boost: 0 });
				}
				// l'onde de choc déplace et illumine brièvement les particules dans
				// sa bande de passage — relâchées dès qu'elle s'éloigne (recalculé
				// depuis leur position naturelle à chaque frame, aucun état à gérer).
				for (var i = 0; i < sc.length; i++) {
					var sp = sc[i];
					var ddx = sp.x - cx, ddy = sp.y - cy;
					var dist = Math.hypot(ddx, ddy) || 1;
					var diff = dist - ringRadius;
					if (Math.abs(diff) < pushBand) {
						var force = (1 - Math.abs(diff) / pushBand) * 14 * (0.5 + L.d * 0.5);
						var dirSign = diff >= 0 ? 1 : -1;
						sp.x += (ddx / dist) * force * dirSign;
						sp.y += (ddy / dist) * force * dirSign;
						sp.boost = 1 - Math.abs(diff) / pushBand;
					}
				}
				for (var i = 0; i < sc.length; i++) {
					for (var j = i + 1; j < sc.length; j++) {
						var d = Math.hypot(sc[i].x - sc[j].x, sc[i].y - sc[j].y);
						if (d < 175) {
							ctx.strokeStyle = 'rgba(120,185,255,' + ((1 - d / 175) * 0.6 * L.d) + ')';
							ctx.lineWidth = 1;
							ctx.beginPath();
							ctx.moveTo(sc[i].x, sc[i].y);
							ctx.lineTo(sc[j].x, sc[j].y);
							ctx.stroke();
						}
					}
				}
				for (var i = 0; i < sc.length; i++) {
					var s = sc[i];
					var dotA = Math.min(1, (0.45 + L.d * 0.55) * (1 + s.boost * 0.9));
					ctx.fillStyle = 'rgba(190,225,255,' + dotA + ')';
					ctx.beginPath();
					ctx.arc(s.x, s.y, L.s * (1 + s.boost * 0.6), 0, 7);
					ctx.fill();
				}
			}
			// anneau du pulsar : cercle net, plus visible qu'avant (plus épais,
			// plus lumineux, glow en 2 passes), avec une onde en écho qui suit.
			ctx.strokeStyle = 'rgba(46,155,255,' + ((1 - pr) * 0.22) + ')';
			ctx.lineWidth = 10;
			ctx.beginPath();
			ctx.arc(cx, cy, ringRadius, 0, 7);
			ctx.stroke();
			ctx.strokeStyle = 'rgba(70,180,255,' + ((1 - pr) * 0.85) + ')';
			ctx.lineWidth = 3;
			ctx.beginPath();
			ctx.arc(cx, cy, ringRadius, 0, 7);
			ctx.stroke();
			var pr2 = Math.max(0, pr - 0.18);
			if (pr2 > 0) {
				ctx.strokeStyle = 'rgba(120,185,255,' + (Math.max(0, 1 - pr2 - 0.1) * 0.5) + ')';
				ctx.lineWidth = 1.5;
				ctx.beginPath();
				ctx.arc(cx, cy, pr2 * minSide * 0.62, 0, 7);
				ctx.stroke();
			}
		});
	};

	// orbit — Expertise automatisation IA (anneaux orbitaux 3D)
	effects.orbit = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var rings = [
			{ tilt: 0.32, rot: 0, sp: 0.006, n: 7, col: '90,165,255', ph: 0 },
			{ tilt: 0.5, rot: 1.2, sp: -0.009, n: 5, col: '221,140,70', ph: 1 },
			{ tilt: 0.2, rot: 2.4, sp: 0.013, n: 6, col: '150,205,255', ph: 2 }
		];
		var t = 0;
		// engage : 0..1, s'anime en douceur vers 1 quand le curseur cible l'astre
		// central (et seulement lui, pas l'ensemble des anneaux), vers 0 sinon —
		// jamais de saut instantané, d'où l'accélération/ralentissement progressifs.
		var engage = 0;
		var mx = -9999, my = -9999;
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			mx = e.clientX - rect.left;
			my = e.clientY - rect.top;
		});
		wrap.addEventListener('pointerleave', function () { mx = my = -9999; });
		loop(function () {
			t++;
			ctx.clearRect(0, 0, st.w, st.h);
			var cx = st.w * 0.72, cy = st.h * 0.41, baseR = Math.min(st.w, st.h) * 0.4;
			// proximité continue (0..1 selon la distance), pas un simple seuil dedans/dehors :
			// un seuil dur faisait bondir l'engagement dès l'entrée dans le cercle central,
			// perçu comme une accélération soudaine plutôt qu'un ralliement progressif.
			var proxR = Math.max(90, baseR * 0.55);
			var dist = Math.hypot(mx - cx, my - cy);
			var prox = Math.max(0, Math.min(1, 1 - dist / proxR));
			engage += (prox - engage) * 0.03;
			var R = baseR * (1 + engage * 0.22);
			var speedMul = 1 + engage * 3.0;
			var spacingBoost = engage * 0.06;
			var speedNorm = engage;
			var items = [];
			for (var ri = 0; ri < rings.length; ri++) {
				var ring = rings[ri];
				var rr = R * (0.7 + ring.ph * (0.16 + spacingBoost));
				for (var s = 0; s <= 64; s++) {
					var a = s / 64 * Math.PI * 2 + ring.rot;
					items.push({ type: 'seg', ring: ring, x: cx + Math.cos(a) * rr, y: cy + Math.sin(a) * rr * ring.tilt, z: Math.sin(a) });
				}
				for (var i = 0; i < ring.n; i++) {
					var a = t * ring.sp * speedMul + i / ring.n * Math.PI * 2 + ring.rot;
					items.push({ type: 'dot', ring: ring, x: cx + Math.cos(a) * rr, y: cy + Math.sin(a) * rr * ring.tilt, z: Math.sin(a) });
				}
			}
			items.sort(function (p, q) { return p.z - q.z; });
			for (var i = 0; i < items.length; i++) {
				var it = items[i];
				var depth = (it.z + 1) / 2;
				if (it.type === 'seg') {
					ctx.fillStyle = 'rgba(' + it.ring.col + ',' + Math.min(1, (0.05 + depth * 0.18) * (1 + speedNorm * 0.5)) + ')';
					ctx.fillRect(it.x, it.y, 1.4, 1.4);
				} else {
					var s = 1.5 + depth * 3.5;
					var g = ctx.createRadialGradient(it.x, it.y, 0, it.x, it.y, s * 3);
					g.addColorStop(0, 'rgba(' + it.ring.col + ',' + Math.min(1, (0.35 + depth * 0.6) * (1 + speedNorm * 0.5)) + ')');
					g.addColorStop(1, 'rgba(' + it.ring.col + ',0)');
					ctx.fillStyle = g;
					ctx.beginPath();
					ctx.arc(it.x, it.y, s * 3, 0, 7);
					ctx.fill();
					ctx.fillStyle = 'rgba(230,242,255,' + Math.min(1, (0.5 + depth * 0.5) * (1 + speedNorm * 0.4)) + ')';
					ctx.beginPath();
					ctx.arc(it.x, it.y, s, 0, 7);
					ctx.fill();
				}
			}
			var coreR = 40 * (1 + engage * 0.2);
			var core = ctx.createRadialGradient(cx, cy, 0, cx, cy, coreR);
			core.addColorStop(0, 'rgba(200,230,255,' + Math.min(1, 0.95 * (1 + speedNorm * 0.3)) + ')');
			core.addColorStop(0.4, 'rgba(46,155,255,' + Math.min(1, 0.55 * (1 + speedNorm * 0.4)) + ')');
			core.addColorStop(1, 'rgba(46,155,255,0)');
			ctx.fillStyle = core;
			ctx.beginPath();
			ctx.arc(cx, cy, coreR, 0, 7);
			ctx.fill();
		});
	};

	// ==========================================================
	// Dispatcher — un canvas par page, effet choisi via data-hero-effect
	// ==========================================================

	var destroyers = [];

	function init() {
		var canvases = document.querySelectorAll('.eb-hero-fx__canvas[data-hero-effect]');
		canvases.forEach(function (cv) {
			var name = cv.getAttribute('data-hero-effect') || 'network';
			var fn = effects[name] || effects.network;
			var wrap = cv.closest('.eb-hero-fx');
			if (!wrap) return;
			var helpers = makeHelpers(cv);
			// setup(cv) est appelé plusieurs fois par certains effets (comme dans le code
			// source fourni) : chaque appel renvoie le même {ctx, st} scopé à ce canvas,
			// donc pas de duplication d'état ni de canvas.
			fn(cv, wrap, helpers.setup, helpers.loop);
			destroyers.push(helpers.destroy);
		});
	}

	window.addEventListener('pagehide', function () {
		destroyers.forEach(function (d) { d(); });
		destroyers = [];
	}, { once: true });

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
