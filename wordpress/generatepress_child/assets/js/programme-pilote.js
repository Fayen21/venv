// Page Programme pilote : capture des paramètres UTM/campagne depuis l'URL,
// validation du formulaire de candidature, envoi réel vers admin-ajax.php
// (même principe que audit.js) et défilement doux vers le formulaire pour
// les CTA de la page qui y renvoient.
(function () {
  var form = document.getElementById('pilot-form');
  if (!form) return;

  var successPanel = document.getElementById('pilot-success');
  var backBtn = document.getElementById('pilot-back');
  var serverError = document.getElementById('pilot-form__server-error');

  var loadedAt = Date.now();
  var MIN_SUBMIT_DELAY_MS = 3000;
  var isSubmitting = false;

  var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  var rules = {
    'p-prenom': function (v) { return v.trim().length > 0; },
    'p-nom': function (v) { return v.trim().length > 0; },
    'p-entreprise': function (v) { return v.trim().length > 0; },
    'p-email': function (v) { return EMAIL_RE.test(v.trim()); },
    'p-besoin': function (v) { return v.trim().length > 0; },
    'p-consent': function (v, field) { return field.checked; }
  };

  function rowFor(field) {
    return field.closest('.audit-form__row');
  }

  function setError(field, hasError) {
    var row = rowFor(field);
    if (!row) return;
    row.classList.toggle('has-error', hasError);
    field.setAttribute('aria-invalid', hasError ? 'true' : 'false');
  }

  function validateField(field) {
    var rule = rules[field.id];
    if (!rule) return true;
    var ok = rule(field.value, field);
    setError(field, !ok);
    return ok;
  }

  Object.keys(rules).forEach(function (id) {
    var field = document.getElementById(id);
    if (!field) return;
    var evt = field.type === 'checkbox' ? 'change' : 'input';
    field.addEventListener(evt, function () { validateField(field); });
  });

  function fieldValue(id) {
    var field = document.getElementById(id);
    return field ? field.value.trim() : '';
  }

  function showServerError() {
    if (serverError) serverError.style.display = 'block';
  }

  function hideServerError() {
    if (serverError) serverError.style.display = 'none';
  }

  function showSuccess() {
    form.hidden = true;
    if (successPanel) {
      successPanel.hidden = false;
      successPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
      if (!successPanel.hasAttribute('tabindex')) {
        successPanel.setAttribute('tabindex', '-1');
      }
      successPanel.focus();
    }
  }

  function looksLikeSpam() {
    var honeypot = document.getElementById('p-website');
    if (honeypot && honeypot.value.trim() !== '') return true;
    if (Date.now() - loadedAt < MIN_SUBMIT_DELAY_MS) return true;
    return false;
  }

  // ---------- traçabilité campagne : UTM + secteur ciblé depuis l'URL ----------
  var TRACKING_FIELD_MAP = {
    utm_source: 'p-utm-source',
    utm_medium: 'p-utm-medium',
    utm_campaign: 'p-utm-campaign',
    utm_content: 'p-utm-content',
    campagne: 'p-campagne',
    secteur: 'p-secteur-campagne'
  };

  (function captureTracking() {
    var params = new URLSearchParams(window.location.search);
    Object.keys(TRACKING_FIELD_MAP).forEach(function (param) {
      var value = params.get(param);
      if (!value) return;
      var field = document.getElementById(TRACKING_FIELD_MAP[param]);
      if (field) field.value = value;
    });
  })();

  // ---------- suivi de conversion, léger et sans dépendance ----------
  // Aucun outil d'analytics n'est installé sur le thème à ce jour : ces
  // événements sont poussés dans window.dataLayer s'il existe (no-op sinon,
  // donc sans effet tant qu'aucun GTM/GA4 n'est branché) et diffusés en
  // parallèle via un CustomEvent DOM, pour qu'un futur script de mesure
  // puisse s'y brancher sans toucher à ce fichier. Ne modifie ni ne duplique
  // la capture UTM ci-dessus : elle relit les mêmes champs cachés déjà
  // renseignés (URL en priorité, valeur du champ en repli).
  function trackingParams() {
    var params = new URLSearchParams(window.location.search);
    var data = {};
    Object.keys(TRACKING_FIELD_MAP).forEach(function (param) {
      var fromUrl = params.get(param);
      var field = document.getElementById(TRACKING_FIELD_MAP[param]);
      var value = fromUrl || (field ? field.value.trim() : '');
      if (value) data[param] = value;
    });
    return data;
  }

  function pilotTrack(eventName, extra) {
    var detail = trackingParams();
    if (extra) {
      Object.keys(extra).forEach(function (key) { detail[key] = extra[key]; });
    }
    detail.event = eventName;
    if (Array.isArray(window.dataLayer)) {
      window.dataLayer.push(detail);
    }
    document.dispatchEvent(new CustomEvent('ebPilotTrack', { detail: detail }));
  }

  // ---------- défilement doux vers le formulaire (ou une autre ancre, ex. les avis) ----------
  document.querySelectorAll('[data-pilot-scroll]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      var targetId = link.getAttribute('data-pilot-scroll') || 'pilot-form';
      var target = document.getElementById(targetId);
      if (!target) return;
      e.preventDefault();
      if (targetId === 'pilot-form') pilotTrack('pilot_cta_click');
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    if (isSubmitting) return;

    hideServerError();

    var firstInvalid = null;
    Object.keys(rules).forEach(function (id) {
      var field = document.getElementById(id);
      if (!field) return;
      var ok = validateField(field);
      if (!ok && !firstInvalid) firstInvalid = field;
    });

    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    if (looksLikeSpam()) {
      showSuccess();
      return;
    }

    var ajaxUrl = (window.ebSiteData && window.ebSiteData.ajaxUrl) || '';
    var nonce = (window.ebSiteData && window.ebSiteData.nonce) || '';

    var fields = {
      prenom: fieldValue('p-prenom'),
      nom: fieldValue('p-nom'),
      entreprise: fieldValue('p-entreprise'),
      email: fieldValue('p-email'),
      telephone: fieldValue('p-tel'),
      secteur_activite: fieldValue('p-secteur'),
      taille_entreprise: fieldValue('p-taille'),
      besoin: fieldValue('p-besoin'),
      consent: document.getElementById('p-consent').checked ? '1' : '',
      website: fieldValue('p-website'),
      utm_source: fieldValue('p-utm-source'),
      utm_medium: fieldValue('p-utm-medium'),
      utm_campaign: fieldValue('p-utm-campaign'),
      utm_content: fieldValue('p-utm-content'),
      campagne: fieldValue('p-campagne'),
      secteur_campagne: fieldValue('p-secteur-campagne'),
      page: window.location.href
    };

    if (!ajaxUrl) {
      showSuccess();
      return;
    }

    isSubmitting = true;

    // Envoi réel : POST vers admin-ajax.php, traité côté serveur par
    // eb_handle_pilot_submission() (functions.php) qui envoie un email via
    // wp_mail() — fonctionne sans configuration supplémentaire.
    var body = [];
    var postFields = { action: 'eb_pilot_submit', nonce: nonce };
    Object.keys(fields).forEach(function (key) { postFields[key] = fields[key]; });
    Object.keys(postFields).forEach(function (key) {
      body.push(encodeURIComponent(key) + '=' + encodeURIComponent(postFields[key]));
    });

    fetch(ajaxUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: body.join('&')
    }).then(function (response) {
      return response.json().catch(function () { return null; });
    }).then(function (json) {
      isSubmitting = false;
      if (json && json.success) {
        pilotTrack('pilot_form_submit');
        showSuccess();
      } else {
        showServerError();
      }
    }).catch(function () {
      isSubmitting = false;
      showServerError();
    });
  });

  // ---------- démonstration en direct ("le programme en bref") ----------
  // Même mécanique que la démo de l'accueil (assets/js/home.js) : onglets +
  // progression d'étapes animée, adaptée à un jeu de données propre à cette
  // page (3 exemples déjà validés) plutôt que les 5 scénarios de l'accueil.
  var ICON_PATHS = {
    mail: '<rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="M4 6.5l8 6 8-6"></path>',
    check: '<circle cx="12" cy="12" r="9"></circle><path d="M8.5 12.5l2.3 2.3 4.7-4.8"></path>',
    send: '<path d="M22 2L11 13"></path><path d="M22 2l-7 20-4-9-9-4 20-7z"></path>',
    document: '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><path d="M14 2v6h6"></path>',
    extract: '<line x1="5" y1="19" x2="5" y2="12"></line><line x1="12" y1="19" x2="12" y2="7"></line><line x1="19" y1="19" x2="19" y2="14"></line>',
    grid: '<rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>',
    calendar: '<rect x="3" y="4" width="18" height="18" rx="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>',
    bell: '<path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path>',
    clipboard: '<rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 8h6M9 12h6M9 16h4"></path>'
  };
  function pilotStepIconSvg(name) {
    return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">' + ICON_PATHS[name] + '</svg>';
  }

  var PILOT_SCENARIOS = {
    demande: {
      file: 'demande_qualification · n8n',
      note: 'Réponse préparée à partir des informations vérifiées',
      steps: [
        { icon: 'mail', title: 'Demande reçue', sub: 'formulaire ou email entrant' },
        { icon: 'check', title: 'Informations vérifiées', sub: 'données recoupées automatiquement' },
        { icon: 'send', title: 'Réponse préparée', sub: 'prête à être envoyée' }
      ]
    },
    document: {
      file: 'traitement_documents · Make',
      note: 'Tableau mis à jour sans ressaisie manuelle',
      steps: [
        { icon: 'document', title: 'Document reçu', sub: 'facture, contrat, justificatif…' },
        { icon: 'extract', title: 'Données extraites', sub: 'lecture automatique des champs clés' },
        { icon: 'grid', title: 'Tableau mis à jour', sub: 'ligne ajoutée, sans erreur' }
      ]
    },
    echeance: {
      file: 'suivi_echeances · n8n',
      note: 'Suivi centralisé, aucune échéance oubliée',
      steps: [
        { icon: 'calendar', title: 'Échéance détectée', sub: 'date approchant identifiée' },
        { icon: 'bell', title: 'Relance préparée', sub: 'message prêt à valider' },
        { icon: 'clipboard', title: 'Suivi centralisé', sub: 'statut mis à jour' }
      ]
    }
  };
  var PILOT_ORDER = ['demande', 'document', 'echeance'];

  var pilotReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var pilotDemoRoot = document.querySelector('[data-workflow-tabs]');
  if (pilotDemoRoot) {
    var pilotState = { scenario: 'demande', step: 0 };
    var pilotRotateTimer = null;
    var pilotFileEl = document.querySelector('[data-workflow-file]');
    var pilotNoteEl = document.querySelector('[data-workflow-note]');
    var pilotTabs = pilotDemoRoot.querySelectorAll('.workflow-tabs__btn');
    var pilotStepEls = document.querySelectorAll('.workflow-step[data-step]');
    var pilotStepRefs = Array.prototype.map.call(pilotStepEls, function (stepEl) {
      return {
        el: stepEl,
        icon: stepEl.querySelector('[data-step-icon-emoji]'),
        title: stepEl.querySelector('[data-step-title]'),
        sub: stepEl.querySelector('[data-step-sub]'),
        badge: stepEl.querySelector('[data-step-badge]')
      };
    });

    function pilotRenderScenario() {
      var scen = PILOT_SCENARIOS[pilotState.scenario];
      if (pilotFileEl) pilotFileEl.textContent = scen.file;
      if (pilotNoteEl) pilotNoteEl.textContent = scen.note;
      pilotTabs.forEach(function (btn) {
        btn.classList.toggle('is-active', btn.dataset.scenario === pilotState.scenario);
      });
      pilotStepRefs.forEach(function (ref, i) {
        var st = scen.steps[i];
        if (ref.icon) ref.icon.innerHTML = pilotStepIconSvg(st.icon);
        if (ref.title) ref.title.textContent = st.title;
        if (ref.sub) ref.sub.textContent = st.sub;
      });
      pilotRenderStepStates();
    }

    function pilotRenderStepStates() {
      var allDone = pilotState.step >= 3;
      pilotStepRefs.forEach(function (ref, i) {
        var done = allDone || pilotState.step > i;
        var active = !allDone && pilotState.step === i;
        ref.el.classList.toggle('is-done', done);
        ref.el.classList.toggle('is-active', active);
        ref.el.classList.toggle('is-pending', !done && !active);
        if (ref.badge) ref.badge.textContent = done ? 'terminé' : (active ? 'traitement…' : 'en attente');
      });
    }

    function pilotTick() {
      pilotState.step = Math.min(pilotState.step + 1, 3);
      pilotRenderStepStates();
    }

    function pilotStartRotation() {
      if (pilotReducedMotion) return;
      if (pilotRotateTimer) clearInterval(pilotRotateTimer);
      pilotRotateTimer = setInterval(function () {
        var idx = PILOT_ORDER.indexOf(pilotState.scenario);
        pilotState.scenario = PILOT_ORDER[(idx + 1) % PILOT_ORDER.length];
        pilotState.step = 0;
        pilotRenderScenario();
      }, 6000);
    }

    function pilotSelectScenario(key) {
      pilotState.scenario = key;
      pilotState.step = 0;
      pilotRenderScenario();
      pilotStartRotation();
    }

    pilotTabs.forEach(function (btn) {
      btn.addEventListener('click', function () {
        pilotSelectScenario(btn.dataset.scenario);
      });
    });

    pilotRenderScenario();
    if (!pilotReducedMotion) {
      setInterval(pilotTick, 1500);
    }
    pilotStartRotation();
  }

  if (backBtn) {
    backBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.location.href = (window.ebSiteData && window.ebSiteData.homeUrl) || 'index.html';
    });
  }
})();
