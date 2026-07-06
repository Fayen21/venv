// Shared site behavior: mobile menu toggle (hamburger, ≤1024px) + header "Expertises" dropdown.
(function () {
  var header = document.querySelector('.site-header');
  var toggle = document.querySelector('[data-menu-toggle]');
  var nav = header ? header.querySelector('.site-nav') : null;
  if (!header || !toggle || !nav) return;

  function openMenu() {
    header.classList.add('is-menu-open');
    toggle.setAttribute('aria-expanded', 'true');
  }
  function closeMenu() {
    header.classList.remove('is-menu-open');
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', function (e) {
    e.stopPropagation();
    if (header.classList.contains('is-menu-open')) closeMenu(); else openMenu();
  });
  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });
  document.addEventListener('click', function (e) {
    if (!nav.contains(e.target) && !toggle.contains(e.target)) closeMenu();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });
})();

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
