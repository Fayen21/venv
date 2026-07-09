// Home page interactions: live workflow demo (scenario rotation + step progression)
// and the "avant / après" bank reconciliation toggle.
// Mirrors the state machine from EB Automatisation V2.dc.html (Component.state / renderVals).
(function () {
  var SCENARIOS = {
    relances: {
      file: 'relances_clients · n8n',
      note: 'Relance envoyée au bon moment — sans oubli',
      steps: [
        { icon: '🔎', title: 'Facture impayée détectée', sub: 'échéance dépassée de 3 j' },
        { icon: '🤖', title: "Relance rédigée par l'IA", sub: 'ton adapté au client' },
        { icon: '📤', title: 'Email envoyé & tracé', sub: 'suivi dans le CRM' }
      ]
    },
    rh: {
      file: 'onboarding_rh · Make',
      note: "Dossier d'arrivée prêt — contrat, accès, documents",
      steps: [
        { icon: '✅', title: 'Embauche validée', sub: 'formulaire RH rempli' },
        { icon: '🤖', title: 'Contrat & documents générés', sub: "pré-remplis par l'IA" },
        { icon: '🗂️', title: 'Accès & dossier créés', sub: 'prêt pour le 1er jour' }
      ]
    },
    emails: {
      file: 'tri_emails · n8n',
      note: 'Chaque message classé au bon endroit',
      steps: [
        { icon: '📥', title: 'Email reçu', sub: 'pièce jointe incluse' },
        { icon: '🤖', title: "Lu & classé par l'IA", sub: 'catégorie + priorité' },
        { icon: '🗂️', title: 'Rangé & assigné', sub: 'dossier + CRM à jour' }
      ]
    },
    pdf: {
      file: 'classement_pdf · n8n',
      note: 'Chaque PDF lu, renommé et rangé au bon endroit',
      steps: [
        { icon: '📄', title: 'PDF reçu (facture, contrat…)', sub: 'pièce jointe ou scan' },
        { icon: '🤖', title: 'Lu par OCR + IA', sub: 'champs clés extraits' },
        { icon: '🗂️', title: 'Renommé & classé', sub: 'bon dossier, sans erreur' }
      ]
    },
    crm: {
      file: 'fiche_crm · Make',
      note: 'Nouveau contact créé dans le CRM, sans ressaisie',
      steps: [
        { icon: '📨', title: 'Demande reçue', sub: 'email ou formulaire' },
        { icon: '🤖', title: "Données extraites par l'IA", sub: 'nom, société, besoin' },
        { icon: '🗂️', title: 'Fiche CRM créée & assignée', sub: 'tâche de suivi planifiée' }
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

    function render() {
      var scen = SCENARIOS[state.scenario];
      if (fileEl) fileEl.textContent = scen.file;
      if (noteEl) noteEl.textContent = scen.note;
      tabs.forEach(function (btn) {
        btn.classList.toggle('is-active', btn.dataset.scenario === state.scenario);
      });
      var allDone = state.step >= 3;
      stepEls.forEach(function (stepEl, i) {
        var st = scen.steps[i];
        var done = allDone || state.step > i;
        var active = !allDone && state.step === i;
        stepEl.classList.toggle('is-done', done);
        stepEl.classList.toggle('is-active', active);
        stepEl.classList.toggle('is-pending', !done && !active);
        var iconEmoji = stepEl.querySelector('[data-step-icon-emoji]');
        var titleEl = stepEl.querySelector('[data-step-title]');
        var subEl = stepEl.querySelector('[data-step-sub]');
        var badgeEl = stepEl.querySelector('[data-step-badge]');
        if (iconEmoji) iconEmoji.textContent = st.icon;
        if (titleEl) titleEl.textContent = st.title;
        if (subEl) subEl.textContent = st.sub;
        if (badgeEl) badgeEl.textContent = done ? 'terminé' : (active ? 'traitement…' : 'en attente');
      });
    }

    function tick() {
      state.step = Math.min(state.step + 1, 3);
      render();
    }

    function startRotation() {
      if (prefersReducedMotion) return;
      if (rotateTimer) clearInterval(rotateTimer);
      rotateTimer = setInterval(function () {
        var idx = ORDER.indexOf(state.scenario);
        state.scenario = ORDER[(idx + 1) % ORDER.length];
        state.step = 0;
        render();
      }, 6000);
    }

    function selectScenario(key) {
      state.scenario = key;
      state.step = 0;
      render();
      startRotation();
    }

    tabs.forEach(function (btn) {
      btn.addEventListener('click', function () {
        selectScenario(btn.dataset.scenario);
      });
    });

    render();
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
