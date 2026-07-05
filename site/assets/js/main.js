// Shared site behavior: header "Expertises" dropdown.
(function () {
  document.querySelectorAll('[data-dropdown]').forEach(function (dropdown) {
    var trigger = dropdown.querySelector('[data-dropdown-trigger]');
    var panel = dropdown.querySelector('[data-dropdown-panel]');
    if (!trigger || !panel) return;

    function open() {
      dropdown.classList.add('is-open');
      trigger.classList.add('is-active');
      trigger.setAttribute('aria-expanded', 'true');
      panel.hidden = false;
    }
    function close() {
      dropdown.classList.remove('is-open');
      trigger.classList.remove('is-active');
      trigger.setAttribute('aria-expanded', 'false');
      panel.hidden = true;
    }

    trigger.addEventListener('click', function (e) {
      e.stopPropagation();
      if (panel.hidden) open(); else close();
    });
    document.addEventListener('click', function (e) {
      if (!dropdown.contains(e.target)) close();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') close();
    });
  });
})();
