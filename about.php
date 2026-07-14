<?php
// Set current page for active nav highlighting
$current_page = 'about';
include 'header.php';
?>

<!-- ============================================================
PAGE BANNER — With cta.webp background
============================================================ -->
<section class="page-banner">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
      <span class="current">About Us</span>
    </div>
    <h1>About Us</h1>
    <p>Three decades of excellence in supplying genuine TMT bars and structural steel across India.</p>
  </div>
</section>

<!-- ============================================================
WHO WE ARE
============================================================ -->
<section class="who-section">
  <div class="container">
    <div class="section-label" data-aos="fade-up">
      <h4>About Us</h4>
      <h2>Who we are</h2>
    </div>
    <p class="lede" data-aos="fade-up" data-aos-delay="100">For over three decades, Savani Steel has been a trusted supplier of genuine TMT bars, structural steel, and allied steel products from India's leading manufacturers. With an extensive inventory in Surat and Vadodara, we serve builders, contractors, industries, and infrastructure projects with reliable steel solutions tailored to their requirements.</p>
    <p class="lede" data-aos="fade-up" data-aos-delay="200">Our commitment to quality, authenticity, and customer satisfaction has earned us a strong reputation in the industry. Backed by trusted supply partnerships, organized inventory management, and competitive pricing, we ensure consistent product availability and dependable service for projects of every size. Whether it's a routine requirement or a large-scale order, Savani Steel is committed to delivering the right products with professionalism and reliability.</p>
  </div>
</section>

<!-- ============================================================
MISSION & VISION — Containerized with large square images
============================================================ -->
<section class="mv-section" id="mv-section">
  <div class="container">
    <!-- Mission: Image Left, Content Right -->
    <div class="mv-row" data-aos="fade-up" data-aos-duration="900">
      <div class="mv-image-col">
        <img src="assets/images/mission.webp" alt="Our Mission" />
      </div>
      <div class="mv-content-col">
        <span class="mv-tag">Purpose</span>
        <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
        <h3>Our Mission</h3>
        <p>Our mission is to provide the right steel products for every project at competitive prices while delivering exceptional customer service. By understanding each client's unique requirements, we recommend the most suitable TMT bars, structural steel, and allied products from trusted brands. We are committed to maintaining quality, extensive inventory, transparent business practices, and building long-term relationships through reliability, trust, and consistent support.</p>
      </div>
    </div>

    <!-- Vision: Content Left, Image Right (reverse) -->
    <div class="mv-row reverse" data-aos="fade-up" data-aos-duration="900">
      <div class="mv-image-col">
        <img src="assets/images/vision.webp" alt="Our Vision" />
      </div>
      <div class="mv-content-col">
        <span class="mv-tag">Direction</span>
        <div class="mv-icon"><i class="fas fa-eye"></i></div>
        <h3>Our Vision</h3>
        <p>Our vision is to be the most trusted and preferred steel supplier by providing genuine, high-quality TMT bars and structural steel products that meet every customer's requirements. We strive to deliver value through competitive pricing, extensive inventory, dependable service, and long-term partnerships built on trust, integrity, and customer satisfaction.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
TESTIMONIALS — Carousel (same as index.php)
============================================================ -->
<section class="testimonials-section" id="testimonials">
  <div class="container">
    <div class="section-label" data-aos="fade-up">
      <h4>Testimonials</h4>
      <h2>What Our Clients Say</h2>
    </div>
    <div class="testimonial-slider-wrapper">
      <div class="testimonial-track" id="testimonialTrack">
        <!-- Cards remain the same -->
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"Savani Steel has been our trusted partner for over a decade. Their TMT bars are of exceptional quality, and their on-time delivery has never let us down."</p>
          <div class="author"><div class="avatar">RK</div><div><div class="name">Rajesh Kumar</div><div class="role">Project Director, BuildTech Infra</div></div></div>
        </div>
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"We've been sourcing structural steel from Savani Steel for years. Their commitment to quality and genuine packaging makes them our preferred supplier."</p>
          <div class="author"><div class="avatar">AP</div><div><div class="name">Amit Patel</div><div class="role">Procurement Head, Gujarat Constructions</div></div></div>
        </div>
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"The team at Savani Steel understands our requirements perfectly. Their after-sales support and third-party testing give us complete confidence."</p>
          <div class="author"><div class="avatar">SM</div><div><div class="name">Sneha Mehta</div><div class="role">Operations Manager, Metro Infra Ltd.</div></div></div>
        </div>
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"Excellent service and top-notch material. Savani Steel delivered our order ahead of schedule, and the quality exceeded our expectations."</p>
          <div class="author"><div class="avatar">VR</div><div><div class="name">Vikram Rathore</div><div class="role">Site Manager, RKD Constructions</div></div></div>
        </div>
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"We rely on Savani Steel for all our major projects. Their inventory depth and quick response time are unmatched in the industry."</p>
          <div class="author"><div class="avatar">NS</div><div><div class="name">Nisha Shah</div><div class="role">Director, Shree Infra Projects</div></div></div>
        </div>
        <div class="testimonial-card">
          <div class="quote"><i class="fas fa-quote-right"></i></div>
          <p>"From the first order to the hundredth, Savani Steel has delivered consistent quality and reliability. A true partner in growth."</p>
          <div class="author"><div class="avatar">AD</div><div><div class="name">Anand Desai</div><div class="role">Managing Partner, Desai &amp; Sons</div></div></div>
        </div>
      </div>
    </div>
    <div class="slider-controls">
      <button id="prevBtn"><i class="fas fa-chevron-left"></i></button>
      <div class="slider-dots" id="sliderDots"></div>
      <button id="nextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
  </div>
</section>

<!-- ============================================================
CTA SECTION
============================================================ -->
<?php include 'cta.php'; ?>

<?php include 'footer.php'; ?>