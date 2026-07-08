// Shared site behavior: mobile menu toggle (hamburger, ≤1024px) + header "Expertises" dropdown.
(function () {
  var header = document.querySelector('.site-header');
  var toggle = document.querySelector('[data-menu-toggle]');
  var nav = header ? header.querySelector('.site-nav') : null;
  if (!header || !toggle || !nav) return;

  function getFocusableNavElements() {
    return Array.prototype.slice.call(nav.querySelectorAll('a, button:not([disabled])'))
      .filter(function (el) { return el.offsetParent !== null; });
  }

  function openMenu() {
    header.classList.add('is-menu-open');
    toggle.setAttribute('aria-expanded', 'true');
    toggle.setAttribute('aria-label', 'Fermer le menu');
  }
  function closeMenu(returnFocus) {
    var wasOpen = header.classList.contains('is-menu-open');
    header.classList.remove('is-menu-open');
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Ouvrir le menu');
    if (wasOpen && returnFocus && nav.contains(document.activeElement)) {
      toggle.focus();
    }
  }

  toggle.addEventListener('click', function (e) {
    e.stopPropagation();
    if (header.classList.contains('is-menu-open')) closeMenu(true); else openMenu();
  });
  nav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () { closeMenu(false); });
  });
  document.addEventListener('click', function (e) {
    if (!nav.contains(e.target) && !toggle.contains(e.target)) closeMenu(false);
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu(true);
    if (e.key === 'Tab' && header.classList.contains('is-menu-open')) {
      var focusable = [toggle].concat(getFocusableNavElements());
      var first = focusable[0];
      var last = focusable[focusable.length - 1];
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault();
        last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
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

// Bouton "retour en haut" : apparaît après un peu de défilement, remonte en douceur.
(function () {
  var btn = document.getElementById('back-to-top');
  if (!btn) return;
  var SHOW_AFTER = 500;

  function toggle() {
    if (window.scrollY > SHOW_AFTER) {
      btn.classList.add('is-visible');
    } else {
      btn.classList.remove('is-visible');
    }
  }

  window.addEventListener('scroll', toggle, { passive: true });
  toggle();

  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
