// Page Audit : validation frontend inchangée + envoi réel vers un webhook Make
// en POST JSON (si configuré), avec protection anti-spam basique (honeypot +
// délai minimum) et repli sur le comportement de démonstration si le webhook
// n'est pas encore configuré.
(function () {
  var form = document.getElementById('audit-form');
  if (!form) return;

  var successPanel = document.getElementById('audit-success');
  var successName = document.getElementById('audit-success-name');
  var backBtn = document.getElementById('audit-back');
  var serverError = document.getElementById('audit-form__server-error');

  var loadedAt = Date.now();
  var MIN_SUBMIT_DELAY_MS = 3000;
  var isSubmitting = false;

  var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  var rules = {
    'f-prenom': function (v) { return v.trim().length > 0; },
    'f-email': function (v) { return EMAIL_RE.test(v.trim()); },
    'f-besoin': function (v) { return v.trim().length > 0; }
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
    var ok = rule(field.value);
    setError(field, !ok);
    return ok;
  }

  Object.keys(rules).forEach(function (id) {
    var field = document.getElementById(id);
    if (!field) return;
    field.addEventListener('input', function () { validateField(field); });
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
    var prenomField = document.getElementById('f-prenom');
    if (successName) successName.textContent = prenomField ? ', ' + prenomField.value.trim() : '';

    form.hidden = true;
    if (successPanel) {
      successPanel.hidden = false;
      successPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
      // Déplace le focus clavier/lecteur d'écran sur le message de succès :
      // sans ça, le changement de contenu n'est annoncé à personne d'autre
      // qu'aux utilisateurs voyants suivant le défilement.
      if (!successPanel.hasAttribute('tabindex')) {
        successPanel.setAttribute('tabindex', '-1');
      }
      successPanel.focus();
    }
  }

  function looksLikeSpam() {
    var honeypot = document.getElementById('f-website');
    if (honeypot && honeypot.value.trim() !== '') return true;
    if (Date.now() - loadedAt < MIN_SUBMIT_DELAY_MS) return true;
    return false;
  }

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

    // Piège à robots / soumission trop rapide : on ignore silencieusement
    // l'envoi réel mais on affiche le même succès, pour ne pas renseigner
    // un bot sur le fait qu'il a été détecté.
    if (looksLikeSpam()) {
      showSuccess();
      return;
    }

    var webhookUrl = (window.ebSiteData && window.ebSiteData.webhookUrl) || '';

    // Webhook non configuré : on garde le comportement de démonstration
    // (aucun envoi réseau), pour que le site reste fonctionnel tel quel.
    if (!webhookUrl) {
      showSuccess();
      return;
    }

    var payload = {
      prenom: fieldValue('f-prenom'),
      nom: fieldValue('f-nom'),
      entreprise: fieldValue('f-entreprise'),
      email: fieldValue('f-email'),
      telephone: fieldValue('f-tel'),
      besoin: fieldValue('f-besoin'),
      page: window.location.href,
      submittedAt: new Date().toISOString()
    };

    isSubmitting = true;

    fetch(webhookUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    }).then(function (response) {
      isSubmitting = false;
      if (response.ok) {
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
