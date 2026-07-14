document.addEventListener('DOMContentLoaded', function () {

  var MOBILE_BREAKPOINT = 840;

  /* ---------- Header scrolled state ---------- */
  var header = document.getElementById('header');
  function updateHeaderScroll() {
    if (window.scrollY > 10) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }
  if (header) {
    updateHeaderScroll();
    window.addEventListener('scroll', updateHeaderScroll, { passive: true });
  }

  /* ---------- Hamburger (mobile nav) toggle ---------- */
  var hamburger = document.getElementById('hamburger');
  var mainNav = document.getElementById('mainNav');

  function closeMobileNav() {
    if (mainNav) mainNav.classList.remove('open');
    if (hamburger) hamburger.classList.remove('active');
  }

  if (hamburger && mainNav) {
    hamburger.addEventListener('click', function () {
      mainNav.classList.toggle('open');
      hamburger.classList.toggle('active');
    });
  }

  /* ---------- Products dropdown ---------- */
  var dropdown = document.getElementById('productsDropdown');
  var productsLink = document.getElementById('productsLink');

  function closeDropdown() {
    if (dropdown) dropdown.classList.remove('open');
    if (productsLink) productsLink.setAttribute('aria-expanded', 'false');
  }

  if (dropdown && productsLink) {
    productsLink.addEventListener('click', function (e) {
      // Only intercept on mobile widths, where the submenu can't rely on :hover.
      if (window.innerWidth <= MOBILE_BREAKPOINT) {
        var isOpen = dropdown.classList.contains('open');
        if (!isOpen) {
          // First tap: open the submenu instead of navigating away.
          e.preventDefault();
          dropdown.classList.add('open');
          productsLink.setAttribute('aria-expanded', 'true');
        }
        // Second tap (already open): let the link navigate normally to products.php.
      }
      // Desktop: do nothing special, hover already shows the menu and the link
      // navigates on click as expected.
    });
  }

  /* Close dropdown / mobile nav when clicking outside */
  document.addEventListener('click', function (e) {
    if (dropdown && !dropdown.contains(e.target)) {
      closeDropdown();
    }
    if (mainNav && hamburger && !mainNav.contains(e.target) && !hamburger.contains(e.target)) {
      closeMobileNav();
    }
  });

  /* Close everything on Escape */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeDropdown();
      closeMobileNav();
    }
  });

  /* Close the mobile drawer after tapping any ordinary nav link (real navigation).
     The Products link is handled separately above, so it's excluded here —
     otherwise tapping it to open the submenu would also collapse the whole
     mobile menu out from under it. */
  if (mainNav) {
    mainNav.querySelectorAll('a').forEach(function (link) {
      if (link.id === 'productsLink') return;
      link.addEventListener('click', function () {
        closeMobileNav();
      });
    });
  }
});