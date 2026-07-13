// Home page interactions: live workflow demo (scenario rotation + step progression)
// and the "avant / après" bank reconciliation toggle.
// Mirrors the state machine from EB Automatisation V2.dc.html (Component.state / renderVals).
(function () {
  // Icônes SVG (même style que le reste du site : trait, currentColor) — remplace les emojis
  // précédemment utilisés comme icônes d'étape dans la démo en direct.
  var ICON_PATHS = {
    search: '<circle cx="10.5" cy="10.5" r="6.5"></circle><path d="M20 20l-4.35-4.35"></path>',
    ai: '<rect x="4" y="8" width="16" height="11" rx="3"></rect><circle cx="9" cy="13.5" r="1.2"></circle><circle cx="15" cy="13.5" r="1.2"></circle><path d="M12 8V4M9 4h6"></path>',
    send: '<path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4 20-7z"></path>',
    check: '<circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path>',
    folder: '<path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7z"></path>',
    inbox: '<path d="M4 12h4l2 3h4l2-3h4"></path><path d="M4 12v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"></path><path d="M4 12l2-7h12l2 7"></path>',
    document: '<rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path>',
    mail: '<rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path>'
  };
  function stepIconSvg(name) {
    return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">' + ICON_PATHS[name] + '</svg>';
  }

  var SCENARIOS = {
    relances: {
      file: 'relances_clients · n8n',
      note: 'Relance envoyée au bon moment — sans oubli',
      steps: [
        { icon: 'search', title: 'Facture impayée détectée', sub: 'échéance dépassée de 3 j' },
        { icon: 'ai', title: "Relance rédigée par l'IA", sub: 'ton adapté au client' },
        { icon: 'send', title: 'Email envoyé & tracé', sub: 'suivi dans le CRM' }
      ]
    },
    rh: {
      file: 'onboarding_rh · Make',
      note: "Dossier d'arrivée prêt — contrat, accès, documents",
      steps: [
        { icon: 'check', title: 'Embauche validée', sub: 'formulaire RH rempli' },
        { icon: 'ai', title: 'Contrat & documents générés', sub: "pré-remplis par l'IA" },
        { icon: 'folder', title: 'Accès & dossier créés', sub: 'prêt pour le 1er jour' }
      ]
    },
    emails: {
      file: 'tri_emails · n8n',
      note: 'Chaque message classé au bon endroit',
      steps: [
        { icon: 'inbox', title: 'Email reçu', sub: 'pièce jointe incluse' },
        { icon: 'ai', title: "Lu & classé par l'IA", sub: 'catégorie + priorité' },
        { icon: 'folder', title: 'Rangé & assigné', sub: 'dossier + CRM à jour' }
      ]
    },
    pdf: {
      file: 'classement_pdf · n8n',
      note: 'Chaque PDF lu, renommé et rangé au bon endroit',
      steps: [
        { icon: 'document', title: 'PDF reçu (facture, contrat…)', sub: 'pièce jointe ou scan' },
        { icon: 'ai', title: 'Lu par OCR + IA', sub: 'champs clés extraits' },
        { icon: 'folder', title: 'Renommé & classé', sub: 'bon dossier, sans erreur' }
      ]
    },
    crm: {
      file: 'fiche_crm · Make',
      note: 'Nouveau contact créé dans le CRM, sans ressaisie',
      steps: [
        { icon: 'mail', title: 'Demande reçue', sub: 'email ou formulaire' },
        { icon: 'ai', title: "Données extraites par l'IA", sub: 'nom, société, besoin' },
        { icon: 'folder', title: 'Fiche CRM créée & assignée', sub: 'tâche de suivi planifiée' }
      ]
    }
  };
  var ORDER = ['relances', 'rh', 'emails', 'pdf', 'crm'];

  var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var demoRoot = document.querySelector('[data-workflow-tabs]');
  if (demoRoot) {
    var state = { scenario: 'relances', step: 0 };
    var rotateTimer = null;
    var fileEl = document.querySelector('[data-workflow-file]');
    var noteEl = document.querySelector('[data-workflow-note]');
    var tabs = demoRoot.querySelectorAll('.workflow-tabs__btn');
    var stepEls = document.querySelectorAll('.workflow-step[data-step]');
    // Références mises en cache une seule fois : la structure DOM des étapes
    // est statique, seuls le texte et les classes changent au fil du temps —
    // requêter le DOM à chaque tick (toutes les 1,5s) est un coût inutile qui
    // s'ajoute à la boucle canvas du hero tournant en parallèle.
    var stepRefs = Array.prototype.map.call(stepEls, function (stepEl) {
      return {
        el: stepEl,
        icon: stepEl.querySelector('[data-step-icon-emoji]'),
        title: stepEl.querySelector('[data-step-title]'),
        sub: stepEl.querySelector('[data-step-sub]'),
        badge: stepEl.querySelector('[data-step-badge]')
      };
    });

    // Étapes (icône + titre + sous-titre) : ne changent qu'au changement de
    // scénario, jamais à chaque tick de progression.
    function renderScenario() {
      var scen = SCENARIOS[state.scenario];
      if (fileEl) fileEl.textContent = scen.file;
      if (noteEl) noteEl.textContent = scen.note;
      tabs.forEach(function (btn) {
        btn.classList.toggle('is-active', btn.dataset.scenario === state.scenario);
      });
      stepRefs.forEach(function (ref, i) {
        var st = scen.steps[i];
        if (ref.icon) ref.icon.innerHTML = stepIconSvg(st.icon);
        if (ref.title) ref.title.textContent = st.title;
        if (ref.sub) ref.sub.textContent = st.sub;
      });
      renderStepStates();
    }

    // État de progression (done/active/pending + badge) : seul ce qui change
    // à chaque tick — aucune réécriture d'icône ni de texte d'étape.
    function renderStepStates() {
      var allDone = state.step >= 3;
      stepRefs.forEach(function (ref, i) {
        var done = allDone || state.step > i;
        var active = !allDone && state.step === i;
        ref.el.classList.toggle('is-done', done);
        ref.el.classList.toggle('is-active', active);
        ref.el.classList.toggle('is-pending', !done && !active);
        if (ref.badge) ref.badge.textContent = done ? 'terminé' : (active ? 'traitement…' : 'en attente');
      });
    }

    function tick() {
      state.step = Math.min(state.step + 1, 3);
      renderStepStates();
    }

    function startRotation() {
      if (prefersReducedMotion) return;
      if (rotateTimer) clearInterval(rotateTimer);
      rotateTimer = setInterval(function () {
        var idx = ORDER.indexOf(state.scenario);
        state.scenario = ORDER[(idx + 1) % ORDER.length];
        state.step = 0;
        renderScenario();
      }, 6000);
    }

    function selectScenario(key) {
      state.scenario = key;
      state.step = 0;
      renderScenario();
      startRotation();
    }

    tabs.forEach(function (btn) {
      btn.addEventListener('click', function () {
        selectScenario(btn.dataset.scenario);
      });
    });

    renderScenario();
    if (!prefersReducedMotion) {
      setInterval(tick, 1500);
    }
    startRotation();
  }

  // avant / après — rapprochement bancaire
  var baToggle = document.querySelector('[data-ba-toggle]');
  if (baToggle) {
    var baButtons = baToggle.querySelectorAll('.ba-toggle__btn');
    var baPanels = document.querySelectorAll('[data-ba-panel]');
    baButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.dataset.ba;
        baButtons.forEach(function (b) { b.classList.toggle('is-active', b === btn); });
        baPanels.forEach(function (p) { p.hidden = p.dataset.baPanel !== target; });
      });
    });
  }
})();
