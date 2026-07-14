<?php
// Set current page for active nav highlighting
$current_page = 'contact';
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
            <span class="current">Contact Us</span>
        </div>
        <h1>Contact Us</h1>
        <p>We'd love to hear from you. Reach out for any inquiries about our TMT bars and structural steel products.</p>
    </div>
</section>

<!-- ============================================================
CONTACT SECTION
============================================================ -->
<section class="contact-section">
    <div class="container">
        <div class="section-label" data-aos="fade-up">
            <h4>Get In Touch</h4>
            <h2>Contact us</h2>
        </div>

        <!-- Contact Cards -->
        <div class="contact-cards" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-card">
                <div class="icon-circle"><img src="assets/images/contact.png" alt="Phone"></div>
                <span>Call</span>
                <a href="tel:+917778893774">+91 77788 93774</a>
            </div>
            <div class="contact-card">
                <div class="icon-circle"><img src="assets/images/mail.png" alt="Email"></div>
                <span>Email</span>
                <a href="mailto:sales@savanisteels.com">sales@savanisteels.com</a>
            </div>
            <div class="contact-card">
                <div class="icon-circle"><img src="assets/images/location.png" alt="Location"></div>
                <span>Location</span>
                <p>611, International Finance Centre, VIP Road, Vesu, Surat - 395007, Gujarat</p>
            </div>
        </div>

        <!-- Reach Form — Image Left (Square), Form Right -->
        <div class="reach-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="reach-image">
                <img src="assets/images/contact-form.webp" alt="Savani Steel - Contact" />
                <div class="image-overlay-text">
                    <h3>The World of<br />TMT Bars and Structural Steel</h3>
                    <p>Quality you can trust, delivered on time.</p>
                </div>
            </div>
            <div class="reach-form-body">
                <h3>Reach us</h3>
                <form class="reach-form-el" data-demo-form>
                    <div class="form-grid">
                        <div class="field"><input type="text" placeholder="Full Name*" required></div>
                        <div class="field"><input type="email" placeholder="Email Address*" required></div>
                        <div class="field"><input type="tel" placeholder="Phone Number*" required></div>
                        <div class="field"><input type="text" placeholder="Subject*"></div>
                        <div class="field full"><textarea rows="5" placeholder="Message"></textarea></div>
                    </div>
                    <button type="submit" class="btn-submit">
                        Send Message
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Map -->
        <div class="map-frame" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.2689193988535!2d72.7809468!3d21.141693699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be053e0b7e9d8fd%3A0xef7f5ed22f0f70f!2sSavani%20Steels!5e0!3m2!1sen!2sin!4v1783771569201!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe></div>
    </div>
</section>

<!-- ============================================================
CONTACT‑SPECIFIC JAVASCRIPT (form submission)
============================================================ -->
<script>
    (function() {
        // Demo form submission
        const demoForm = document.querySelector('[data-demo-form]');
        if (demoForm) {
            demoForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! We will get back to you shortly.');
                this.reset();
            });
        }
    })();
</script>

<?php include 'footer.php'; ?>