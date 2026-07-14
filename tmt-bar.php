<?php
$current_page = 'products';
include 'header.php';
?>

<!-- PAGE BANNER -->
<section class="page-banner">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
            <a href="products.php">Products</a>
            <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
            <span class="current">TMT Bars</span>
        </div>
        <h1>TMT Bars</h1>
        <p>High‑strength, earthquake‑resistant thermo‑mechanically treated bars — available in FE 500, FE 500D, FE 550D, CRS and Epoxy Coated grades.</p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="products-section" style="background: var(--white);">
    <div class="container">
        <div class="product-detail" data-aos="fade-up">
            <div class="product-detail-grid">
                <div class="product-detail-image">
                    <img src="assets/images/product1.jpg" alt="TMT Bars" />
                </div>
                <div class="product-detail-content">
                    <h2>Premium TMT Bars</h2>
                    <p class="subhead">Engineered for strength, durability and safety.</p>
                    <p>Our TMT bars are manufactured using the latest thermo‑mechanical treatment (TMT) process, which gives them a unique combination of high yield strength, superior ductility, and excellent weldability. They are the ideal choice for all types of construction — from residential buildings to large‑scale infrastructure projects.</p>

                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> High tensile strength (up to 550 MPa)</li>
                        <li><i class="fas fa-check-circle"></i> Excellent ductility and bendability</li>
                        <li><i class="fas fa-check-circle"></i> Superior corrosion resistance (Epoxy Coated option)</li>
                        <li><i class="fas fa-check-circle"></i> Earthquake‑resistant properties</li>
                        <li><i class="fas fa-check-circle"></i> Easy to cut, bend and weld on site</li>
                    </ul>

                    <h3>Available Grades</h3>
                    <div class="grade-tags">
                        <span>FE 500</span>
                        <span>FE 500D</span>
                        <span>FE 550D</span>
                        <span>CRS</span>
                        <span>Epoxy Coated</span>
                    </div>

                    <h3>Applications</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-building"></i> Residential & commercial buildings</li>
                        <li><i class="fas fa-bridge"></i> Bridges and flyovers</li>
                        <li><i class="fas fa-road"></i> Highways and runways</li>
                        <li><i class="fas fa-water"></i> Dams and water retaining structures</li>
                        <li><i class="fas fa-industry"></i> Industrial foundations and heavy machinery bases</li>
                    </ul>

                    <div class="cta-inline">
                        <a href="contact.php" class="btn-primary">Request a Quote <i class="fas fa-arrow-right"></i></a>
                        <a href="products.php" class="btn-outline-dark">Back to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>