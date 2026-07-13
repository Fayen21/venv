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
		var N = window.innerWidth < 768 ? 30 : 55;
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
		var M = window.innerWidth < 768 ? 90 : 150;
		var pts = [];
		for (var i = 0; i < M; i++) {
			var y = 1 - (i / (M - 1)) * 2;
			var rad = Math.sqrt(1 - y * y);
			var t = i * 2.399963;
			pts.push({ x: Math.cos(t) * rad, y: y, z: Math.sin(t) * rad });
		}
		var ang = 0;
		var rScale = 1;
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
			rScale += (1 + prox * 0.22 - rScale) * 0.08;
			ang += 0.0035 + prox * 0.012;
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
						ctx.strokeStyle = 'rgba(90,170,255,' + (1 - d / (R * 0.36)) * 0.5 * ((a.depth + b.depth) / 2) + ')';
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
				ctx.fillStyle = 'rgba(150,205,255,' + (0.25 + p.depth * 0.75) + ')';
				ctx.beginPath();
				ctx.arc(p.sx, p.sy, 0.7 + p.depth * 1.8, 0, 7);
				ctx.fill();
			}
		});
	};

	// flow — Réalisations
	effects.flow = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var N = window.innerWidth < 768 ? 450 : 900;
		var ps = [];
		for (var i = 0; i < N; i++) {
			ps.push({ x: Math.random(), y: Math.random(), c: Math.random() < 0.22 ? '221,140,70' : '90,165,255' });
		}
		var t = 0;
		var frameN = 0;
		var cometCycle = 360; // ~6s à 60fps
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
			// comète : traverse le hero en diagonale toutes les ~6s, traînée en
			// dégradé qui s'estompe grâce au fondu de fond ci-dessus.
			var cp = (frameN % cometCycle) / cometCycle;
			var cx = (-0.15 + cp * 1.3) * st.w;
			var cy = (-0.15 + cp * 1.3) * st.h;
			var glow = ctx.createRadialGradient(cx, cy, 0, cx, cy, 26);
			glow.addColorStop(0, 'rgba(255,255,255,.95)');
			glow.addColorStop(0.35, 'rgba(150,205,255,.55)');
			glow.addColorStop(1, 'rgba(150,205,255,0)');
			ctx.fillStyle = glow;
			ctx.beginPath();
			ctx.arc(cx, cy, 26, 0, 7);
			ctx.fill();
			ctx.fillStyle = 'rgba(255,255,255,.95)';
			ctx.beginPath();
			ctx.arc(cx, cy, 2.2, 0, 7);
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
			for (var li = 0; li < layers.length; li++) {
				var L = layers[li];
				var px = ox * L.d * 60, py = oy * L.d * 60, sc = [];
				for (var i = 0; i < L.pts.length; i++) {
					var p = L.pts[i];
					p.x += p.vx; p.y += p.vy;
					if (p.x < 0 || p.x > 1) p.vx *= -1;
					if (p.y < 0 || p.y > 1) p.vy *= -1;
					sc.push({ x: p.x * st.w + px, y: p.y * st.h + py });
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
					ctx.fillStyle = 'rgba(190,225,255,' + (0.45 + L.d * 0.55) + ')';
					ctx.beginPath();
					ctx.arc(s.x, s.y, L.s, 0, 7);
					ctx.fill();
				}
			}
			var cx = st.w * 0.5, cy = st.h * 0.5, pr = (t % 160) / 160, rad = pr * Math.min(st.w, st.h) * 0.5;
			ctx.strokeStyle = 'rgba(46,155,255,' + ((1 - pr) * 0.6) + ')';
			ctx.lineWidth = 2;
			ctx.beginPath();
			ctx.arc(cx, cy, rad, 0, 7);
			ctx.stroke();
		});
	};

	// textparticles — Expertise automatisation d'entreprise (mot "AUTOMATISER" en particules)
	effects.textparticles = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var parts = [];
		function build() {
			var off = document.createElement('canvas');
			off.width = Math.floor(st.w);
			off.height = Math.floor(st.h);
			var o = off.getContext('2d');
			o.fillStyle = '#fff';
			o.textAlign = 'center';
			o.textBaseline = 'middle';
			o.font = '700 ' + Math.min(st.w * 0.14, 150) + 'px "Schibsted Grotesk",sans-serif';
			o.fillText('AUTOMATISER', st.w * 0.66, st.h * 0.5);
			var g = window.innerWidth < 768 ? 7 : 5, tg = [];
			try {
				var d = o.getImageData(0, 0, off.width, off.height).data;
				for (var y = 0; y < off.height; y += g) {
					for (var x = 0; x < off.width; x += g) {
						if (d[(y * off.width + x) * 4 + 3] > 128) tg.push({ x: x, y: y });
					}
				}
			} catch (e) { /* canvas non lisible (rare) : dégrade en absence de particules */ }
			parts = tg.map(function (t) {
				return { x: Math.random() * st.w, y: Math.random() * st.h, tx: t.x, ty: t.y, c: Math.random() < 0.18 ? '240,165,110' : '150,205,255' };
			});
		}
		setTimeout(build, 60);
		var m = { x: -999, y: -999 };
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			m.x = e.clientX - rect.left;
			m.y = e.clientY - rect.top;
		});
		wrap.addEventListener('pointerleave', function () { m.x = m.y = -999; });
		loop(function () {
			ctx.clearRect(0, 0, st.w, st.h);
			for (var i = 0; i < parts.length; i++) {
				var p = parts[i];
				var dx = p.x - m.x, dy = p.y - m.y, d2 = dx * dx + dy * dy;
				if (d2 < 6400) {
					var f = (6400 - d2) / 6400 * 6, d = Math.sqrt(d2) || 1;
					p.x += dx / d * f;
					p.y += dy / d * f;
				}
				p.x += (p.tx - p.x) * 0.06;
				p.y += (p.ty - p.y) * 0.06;
				ctx.fillStyle = 'rgba(' + p.c + ',.9)';
				ctx.fillRect(p.x, p.y, 1.8, 1.8);
			}
		});
	};

	// dotsgrid — Expertise automatisation des processus (trame repoussée au curseur)
	effects.dotsgrid = function (cv, wrap, setup, loop) {
		var r = setup(cv), ctx = r.ctx, st = r.st;
		var m = { x: -999, y: -999 };
		var grid = [], gap = window.innerWidth < 768 ? 40 : 30;
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			m.x = e.clientX - rect.left;
			m.y = e.clientY - rect.top;
		});
		wrap.addEventListener('pointerleave', function () { m.x = m.y = -999; });
		function rebuild() {
			grid = [];
			for (var y = gap / 2; y < st.h; y += gap) {
				for (var x = gap / 2; x < st.w; x += gap) {
					grid.push({ ox: x, oy: y, x: x, y: y });
				}
			}
		}
		rebuild();
		var lastW = st.w;
		loop(function () {
			if (Math.abs(st.w - lastW) > 4) { rebuild(); lastW = st.w; }
			ctx.clearRect(0, 0, st.w, st.h);
			for (var i = 0; i < grid.length; i++) {
				var p = grid[i];
				var dx = p.x - m.x, dy = p.y - m.y, d = Math.hypot(dx, dy);
				if (d < 120 && d > 0) {
					var f = (120 - d) / 120 * 26;
					p.x += dx / d * f * 0.25;
					p.y += dy / d * f * 0.25;
				}
				p.x += (p.ox - p.x) * 0.12;
				p.y += (p.oy - p.y) * 0.12;
				var disp = Math.hypot(p.x - p.ox, p.y - p.oy);
				var s = 1 + Math.min(disp * 0.12, 2.6), o = 0.22 + Math.min(disp * 0.04, 0.68);
				ctx.fillStyle = disp > 6 ? 'rgba(120,185,255,' + o + ')' : 'rgba(90,130,190,.3)';
				ctx.beginPath();
				ctx.arc(p.x, p.y, s, 0, 7);
				ctx.fill();
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
		loop(function () {
			t++;
			ctx.clearRect(0, 0, st.w, st.h);
			var cx = st.w * 0.72, cy = st.h * 0.47, R = Math.min(st.w, st.h) * 0.4, items = [];
			for (var ri = 0; ri < rings.length; ri++) {
				var ring = rings[ri];
				var rr = R * (0.7 + ring.ph * 0.16);
				for (var s = 0; s <= 64; s++) {
					var a = s / 64 * Math.PI * 2 + ring.rot;
					items.push({ type: 'seg', ring: ring, x: cx + Math.cos(a) * rr, y: cy + Math.sin(a) * rr * ring.tilt, z: Math.sin(a) });
				}
				for (var i = 0; i < ring.n; i++) {
					var a = t * ring.sp + i / ring.n * Math.PI * 2 + ring.rot;
					items.push({ type: 'dot', ring: ring, x: cx + Math.cos(a) * rr, y: cy + Math.sin(a) * rr * ring.tilt, z: Math.sin(a) });
				}
			}
			items.sort(function (p, q) { return p.z - q.z; });
			for (var i = 0; i < items.length; i++) {
				var it = items[i];
				var depth = (it.z + 1) / 2;
				if (it.type === 'seg') {
					ctx.fillStyle = 'rgba(' + it.ring.col + ',' + (0.05 + depth * 0.18) + ')';
					ctx.fillRect(it.x, it.y, 1.4, 1.4);
				} else {
					var s = 1.5 + depth * 3.5;
					var g = ctx.createRadialGradient(it.x, it.y, 0, it.x, it.y, s * 3);
					g.addColorStop(0, 'rgba(' + it.ring.col + ',' + (0.35 + depth * 0.6) + ')');
					g.addColorStop(1, 'rgba(' + it.ring.col + ',0)');
					ctx.fillStyle = g;
					ctx.beginPath();
					ctx.arc(it.x, it.y, s * 3, 0, 7);
					ctx.fill();
					ctx.fillStyle = 'rgba(230,242,255,' + (0.5 + depth * 0.5) + ')';
					ctx.beginPath();
					ctx.arc(it.x, it.y, s, 0, 7);
					ctx.fill();
				}
			}
			var core = ctx.createRadialGradient(cx, cy, 0, cx, cy, 40);
			core.addColorStop(0, 'rgba(200,230,255,.95)');
			core.addColorStop(0.4, 'rgba(46,155,255,.55)');
			core.addColorStop(1, 'rgba(46,155,255,0)');
			ctx.fillStyle = core;
			ctx.beginPath();
			ctx.arc(cx, cy, 40, 0, 7);
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
