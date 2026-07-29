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

  if (backBtn) {
    backBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.location.href = (window.ebSiteData && window.ebSiteData.homeUrl) || 'index.html';
    });
  }
})();
