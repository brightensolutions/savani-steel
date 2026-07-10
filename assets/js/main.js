document.addEventListener('DOMContentLoaded', function () {

  /* Hero slider */
  var slides = document.querySelectorAll('.hero-slide');
  var dots = document.querySelectorAll('.hero-dots button');
  var eyebrowEl = document.getElementById('heroEyebrow');
  var titleEl = document.getElementById('heroTitle');
  var subEl = document.getElementById('heroSub');
  var slideData = window.__heroSlides;

  if (slides.length && slideData) {
    var current = 0;
    var timer;

    function showSlide(i) {
      slides[current].classList.remove('is-active');
      dots[current].classList.remove('is-active');
      current = i;
      slides[current].classList.add('is-active');
      dots[current].classList.add('is-active');

      [eyebrowEl, titleEl, subEl].forEach(function (el) { if (el) el.style.opacity = 0; });
      setTimeout(function () {
        if (eyebrowEl) eyebrowEl.textContent = slideData[current].eyebrow;
        if (titleEl) titleEl.innerHTML = slideData[current].title;
        if (subEl) subEl.textContent = slideData[current].sub;
        [eyebrowEl, titleEl, subEl].forEach(function (el) { if (el) el.style.opacity = 1; });
      }, 350);
    }

    function next() { showSlide((current + 1) % slides.length); }

    function restart() {
      clearInterval(timer);
      timer = setInterval(next, 6000);
    }

    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        if (i !== current) { showSlide(i); restart(); }
      });
    });

    restart();
  }

  /* Mobile nav toggle */
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.main-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      toggle.classList.toggle('is-open');
      nav.classList.toggle('is-open');
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        toggle.classList.remove('is-open');
        nav.classList.remove('is-open');
      });
    });
  }

  /* Sticky header shadow on scroll */
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.style.boxShadow = window.scrollY > 10 ? '0 4px 24px rgba(0,0,0,.08)' : 'none';
    });
  }

  /* Reveal on scroll */
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* Animated stat counters */
  var counters = document.querySelectorAll('.hero-stats strong[data-count]');
  if ('IntersectionObserver' in window && counters.length) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var target = parseInt(el.dataset.count, 10);
        var suffix = el.dataset.suffix || '';
        var start = 0;
        var duration = 1200;
        var startTime = null;
        function step(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          el.textContent = Math.floor(progress * target) + suffix;
          if (progress < 1) requestAnimationFrame(step);
          else el.textContent = target + suffix;
        }
        requestAnimationFrame(step);
        cio.unobserve(el);
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { cio.observe(el); });
  }

  /* Basic client-side handling for demo forms (no backend wired up) */
  document.querySelectorAll('form[data-demo-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = form.querySelector('button, .submit-btn');
      var original = btn ? btn.textContent : null;
      if (btn) { btn.textContent = 'Thank you — we\u2019ll be in touch'; }
      form.reset();
      if (btn && original) {
        setTimeout(function () { btn.textContent = original; }, 3000);
      }
    });
  });

});
