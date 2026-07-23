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

    var ajaxUrl = (window.ebSiteData && window.ebSiteData.ajaxUrl) || '';
    var nonce = (window.ebSiteData && window.ebSiteData.nonce) || '';
    var webhookUrl = (window.ebSiteData && window.ebSiteData.webhookUrl) || '';

    var fields = {
      prenom: fieldValue('f-prenom'),
      nom: fieldValue('f-nom'),
      entreprise: fieldValue('f-entreprise'),
      email: fieldValue('f-email'),
      telephone: fieldValue('f-tel'),
      besoin: fieldValue('f-besoin'),
      website: fieldValue('f-website'),
      page: window.location.href
    };

    // Aucun endpoint WordPress disponible (ex. aperçu statique hors
    // WordPress) : on garde le comportement de démonstration.
    if (!ajaxUrl) {
      showSuccess();
      return;
    }

    isSubmitting = true;

    // Envoi réel : POST vers admin-ajax.php, traité côté serveur par
    // eb_handle_audit_submission() (functions.php) qui envoie un email via
    // wp_mail() — fonctionne sans configuration supplémentaire.
    var body = [];
    var postFields = { action: 'eb_audit_submit', nonce: nonce };
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
        showSuccess();
      } else {
        showServerError();
      }
    }).catch(function () {
      isSubmitting = false;
      showServerError();
    });

    // Webhook Make optionnel, best-effort en plus de l'email : ne bloque
    // jamais l'affichage du succès s'il n'est pas configuré ou échoue.
    if (webhookUrl) {
      fetch(webhookUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          prenom: fields.prenom,
          nom: fields.nom,
          entreprise: fields.entreprise,
          email: fields.email,
          telephone: fields.telephone,
          besoin: fields.besoin,
          page: fields.page,
          submittedAt: new Date().toISOString()
        })
      }).catch(function () {});
    }
  });

  if (backBtn) {
    backBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.location.href = (window.ebSiteData && window.ebSiteData.homeUrl) || 'index.html';
    });
  }
})();
