<?php
// Set current page for active nav highlighting
$current_page = 'products';
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
            <span class="current">Products</span>
        </div>
        <h1>Our Products</h1>
        <p>Premium TMT bars and structural steel commodities — quality you can trust, delivered on time.</p>
    </div>
</section>

<!-- ============================================================
PRODUCTS SECTION — White Background
============================================================ -->
<section class="products-section" id="products">
    <div class="container">
        <div class="section-label" data-aos="fade-up">
            <h4>Quality</h4>
            <h2>What we supply</h2>
        </div>

        <!-- Product 1: TMT Bars -->
        <div class="product-row" data-aos="fade-up" data-aos-duration="900">
            <div class="product-photo">
                <img src="assets/images/product1.jpg" alt="TMT Bars" />
                <span class="grade-corner">TMT BARS</span>
            </div>
            <div class="product-info">
                <h3>TMT Bars</h3>
                <h6>We offer bars of the following grades</h6>
                <div class="grade-tags">
                    <span>FE 500</span>
                    <span>FE 500D</span>
                    <span>FE 550D</span>
                    <span>CRS</span>
                    <span>Epoxy Coated</span>
                </div>

                <div class="manu-strip">
                    <h5>Primary manufacturers we supply</h5>
                    <ul class="manu-logos">
                        <li><img src="assets/images/pl1.png" alt="Manufacturer"></li>
                        <li><img src="assets/images/pl2.png" alt="Manufacturer"></li>
                        <li><img src="assets/images/pl3.png" alt="Manufacturer"></li>
                        <li><img src="assets/images/pl4.png" alt="Manufacturer"></li>
                        <li><img src="assets/images/pl5.png" alt="Manufacturer"></li>
                    </ul>
                </div>

                <p class="secondary-note">Our secondary list of TMT bar manufacturers are all ISI certified, and includes names like Electro Therm, Vinayak, National, Nilkanth, Friends, Grace, Jindal, Bhagwati, Diamond, Polaad, Gallant, God Parmeshwer, Utkarsh, Mono, Steefo, Girnar, Kamdhenu and many more.</p>
            </div>
        </div>

        <!-- Product 2: Structural Steel -->
        <div class="product-row" data-aos="fade-up" data-aos-delay="150" data-aos-duration="900">
            <div class="product-photo">
                <img src="assets/images/product2.jpg" alt="Structural Steel" />
                <span class="grade-corner">STRUCTURAL</span>
            </div>
            <div class="product-info">
                <h3>Structural Steel Commodities</h3>
                <h6>In structural steel, we offer the following commodities</h6>
                <div class="grade-tags">
                    <span>Pipes</span>
                    <span>Beams</span>
                    <span>Channel</span>
                    <span>Angle</span>
                    <span>Round Bar</span>
                    <span>Plates</span>
                    <span>Sheets</span>
                </div>

                <p class="sez-note"><i class="fas fa-info-circle" style="margin-right:8px;"></i> We are equipped to supply our full product range in the Special Economy Zone (SEZ).</p>
            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>

<?php include 'footer.php'; ?>