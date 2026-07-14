<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php"><img src="assets/images/logo.png" alt="Savani Steel" /></a>
        <p>Your trusted source for genuine TMT bars and structural steel, supported by 30+ years of industry experience and a comprehensive inventory in Surat & Vadodara.</p>
        <div class="footer-social">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h5>Navigate</h5>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="blogs.php">Blogs</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Products</h5>
        <ul>
          <li><a href="products.php#tmt">TMT Bars</a></li>
          <li><a href="products.php#structural">Structural Steel</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Contact</h5>
        <ul class="footer-contact-list">
          <li><i class="fas fa-phone"></i> <a href="tel:+917778893774">+91 77788 93774</a></li>
          <li><i class="fas fa-envelope"></i> <a href="mailto:sales@savanisteels.com">sales@savanisteels.com</a></li>
          <li><i class="fas fa-map-marker-alt"></i> <a href="contact.php">611, International Finance Centre, VIP Road, Vesu, Surat - 395007, Gujarat</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>
        &copy; 2026 Savani Steel. All Rights Reserved. &nbsp;|&nbsp;
        Designed &amp; Developed by <a href="https://brightensolutions.com" target="_blank">Brighten Solutions</a>
      </span>
    </div>
  </div>
</footer>

<!-- WHATSAPP -->
<a class="whatsapp-float" href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  (function() {
    AOS.init({ once: true, offset: 40, duration: 800 });

    // HERO SLIDER
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('#heroDots button');
    const heroTitle = document.getElementById('heroTitle');
    const heroSub = document.getElementById('heroSub');
    const slideData = [
     {
      title: "Your Trusted Partner in Steel Supply.",
      sub: "Providing genuine TMT bars and structural steel products from India's leading brands for over 30 years, with dependable service and an extensive ready stock."
    },
    {
      title: "Comprehensive Steel Solutions.",
      sub: "From residential construction to large-scale infrastructure, we offer a complete range of steel products tailored to the needs of builders, contractors, and industries."
    },
    {
      title: "Experience. Quality. Reliability.",
      sub: "Our focus on authentic products, transparent pricing, and customer satisfaction has made Savani Steel a trusted name in steel distribution."
    }
    ];
    let current = 0, interval;

    function updateSlide(index) {
      if (index === current) return;
      slides.forEach((s, i) => s.classList.toggle('is-active', i === index));
      dots.forEach((d, i) => d.classList.toggle('is-active', i === index));
      if (slideData[index]) { heroTitle.textContent = slideData[index].title; heroSub.textContent = slideData[index].sub; }
      current = index;
    }

    function nextSlide() { updateSlide((current + 1) % slides.length); }
    function startAuto() { clearInterval(interval); interval = setInterval(nextSlide, 5500); }
    dots.forEach((dot, idx) => { dot.addEventListener('click', function() { clearInterval(interval); updateSlide(idx); startAuto(); }); });
    startAuto();

    // SCROLL: header + hero fade
    const header = document.getElementById('header');
    const heroContent = document.getElementById('heroContent');
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 50);
      const hero = document.querySelector('.hero');
      const rect = hero.getBoundingClientRect();
      const progress = Math.min(1, Math.max(0, rect.bottom / window.innerHeight));
      if (heroContent) {
        heroContent.style.opacity = Math.min(1, progress * 1.6);
        heroContent.style.transform = `translateY(${(1 - progress) * 30}px)`;
      }
    });

    // MOBILE NAV
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('mainNav');
    hamburger.addEventListener('click', function() {
      nav.classList.toggle('open');
      const isOpen = nav.classList.contains('open');
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // PRODUCTS DROPDOWN FIX
    const dropdownParent = document.getElementById('productsDropdown');
    const productsLink = document.getElementById('productsLink');

    if (dropdownParent && productsLink) {
      productsLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 840) {
          e.preventDefault();
          if (!dropdownParent.classList.contains('open')) {
            dropdownParent.classList.add('open');
          }
        }
      });

      document.addEventListener('click', function(e) {
        if (window.innerWidth <= 840 && dropdownParent && !dropdownParent.contains(e.target)) {
          dropdownParent.classList.remove('open');
        }
      });

      document.querySelectorAll('.nav a:not(#productsLink)').forEach(function(link) {
        link.addEventListener('click', function() {
          if (window.innerWidth <= 840) {
            dropdownParent.classList.remove('open');
          }
        });
      });

      const dropdownMenu = dropdownParent.querySelector('.dropdown-menu');
      if (dropdownMenu) {
        dropdownMenu.addEventListener('click', function(e) {
          e.stopPropagation();
        });
      }
    }

    document.querySelectorAll('.nav a, .nav .dropdown-menu a').forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 840 && this !== productsLink) {
          nav.classList.remove('open');
          document.body.style.overflow = '';
          hamburger.setAttribute('aria-expanded', 'false');
        }
      });
    });

    // TESTIMONIAL CAROUSEL
    const track = document.getElementById('testimonialTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('sliderDots');
    const cards = track.querySelectorAll('.testimonial-card');
    let currentIndex = 0;
    let cardsPerView = 3;
    let autoSlideInterval;

    function getCardsPerView() {
      if (window.innerWidth <= 840) return 1;
      if (window.innerWidth <= 1024) return 2;
      return 3;
    }

    function initSlider() {
      cardsPerView = getCardsPerView();
      const totalSlides = Math.ceil(cards.length / cardsPerView);
      dotsContainer.innerHTML = '';
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('button');
        dot.classList.toggle('active', i === 0);
        dot.dataset.index = i;
        dot.addEventListener('click', function() {
          goToSlide(parseInt(this.dataset.index));
          resetAutoSlide();
        });
        dotsContainer.appendChild(dot);
      }
      goToSlide(0);
    }

    function goToSlide(index) {
      const totalSlides = Math.ceil(cards.length / cardsPerView);
      if (index >= totalSlides) index = 0;
      if (index < 0) index = totalSlides - 1;
      currentIndex = index;
      const offset = -index * 100;
      track.style.transform = `translateX(${offset}%)`;
      const dots = dotsContainer.querySelectorAll('button');
      dots.forEach((d, i) => d.classList.toggle('active', i === index));
    }

    function nextSlideFn() {
      const totalSlides = Math.ceil(cards.length / cardsPerView);
      goToSlide((currentIndex + 1) % totalSlides);
    }

    function prevSlideFn() {
      const totalSlides = Math.ceil(cards.length / cardsPerView);
      goToSlide((currentIndex - 1 + totalSlides) % totalSlides);
    }

    function startAutoSlide() {
      clearInterval(autoSlideInterval);
      autoSlideInterval = setInterval(nextSlideFn, 5000);
    }

    function resetAutoSlide() {
      clearInterval(autoSlideInterval);
      startAutoSlide();
    }

    prevBtn.addEventListener('click', function() { prevSlideFn(); resetAutoSlide(); });
    nextBtn.addEventListener('click', function() { nextSlideFn(); resetAutoSlide(); });

    let resizeTimeout;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(function() {
        const newPerView = getCardsPerView();
        if (newPerView !== cardsPerView) {
          initSlider();
          startAutoSlide();
        }
      }, 250);
    });

    initSlider();
    startAutoSlide();

    const sliderWrapper = document.querySelector('.testimonial-slider-wrapper');
    sliderWrapper.addEventListener('mouseenter', function() { clearInterval(autoSlideInterval); });
    sliderWrapper.addEventListener('mouseleave', function() { startAutoSlide(); });

  })();
</script>

</body>
</html>