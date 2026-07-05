// Audit page: frontend-only form validation + fake success state (no network request).
(function () {
  var form = document.getElementById('audit-form');
  if (!form) return;

  var successPanel = document.getElementById('audit-success');
  var successName = document.getElementById('audit-success-name');
  var resetBtn = document.getElementById('audit-reset');

  var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  var rules = {
    'audit-name': function (v) { return v.trim().length > 0; },
    'audit-email': function (v) { return EMAIL_RE.test(v.trim()); },
    'audit-size': function (v) { return v !== ''; },
    'audit-message': function (v) { return v.trim().length > 0; },
    'audit-consent': function (v, field) { return field.checked; }
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
    field.addEventListener('input', function () { validateField(field); });
    field.addEventListener('change', function () { validateField(field); });
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();

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

    var nameField = document.getElementById('audit-name');
    var firstName = nameField ? nameField.value.trim().split(/\s+/)[0] : '';
    if (successName) successName.textContent = firstName ? ', ' + firstName : '';

    form.hidden = true;
    if (successPanel) {
      successPanel.hidden = false;
      successPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', function () {
      form.reset();
      Object.keys(rules).forEach(function (id) {
        var field = document.getElementById(id);
        if (field) setError(field, false);
      });
      if (successPanel) successPanel.hidden = true;
      form.hidden = false;
      form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }
})();
