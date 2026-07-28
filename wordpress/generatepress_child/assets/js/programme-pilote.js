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
  (function captureTracking() {
    var params = new URLSearchParams(window.location.search);
    var map = {
      utm_source: 'p-utm-source',
      utm_medium: 'p-utm-medium',
      utm_campaign: 'p-utm-campaign',
      utm_content: 'p-utm-content',
      campagne: 'p-campagne',
      secteur: 'p-secteur-campagne'
    };
    Object.keys(map).forEach(function (param) {
      var value = params.get(param);
      if (!value) return;
      var field = document.getElementById(map[param]);
      if (field) field.value = value;
    });
  })();

  // ---------- défilement doux vers le formulaire pour les CTA de la page ----------
  document.querySelectorAll('[data-pilot-scroll]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      var target = document.getElementById('pilot-form');
      if (!target) return;
      e.preventDefault();
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

    var outils = Array.prototype.slice.call(form.querySelectorAll('input[name="outils[]"]:checked'))
      .map(function (el) { return el.value; });

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
    outils.forEach(function (val) {
      body.push(encodeURIComponent('outils[]') + '=' + encodeURIComponent(val));
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
