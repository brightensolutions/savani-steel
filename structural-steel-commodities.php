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
            <span class="current">Structural Steel Commodities</span>
        </div>
        <h1>Structural Steel Commodities</h1>
        <p>Complete range of structural steel — pipes, beams, channels, angles, round bars, plates and sheets — for every construction need.</p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="products-section" style="background: var(--white);">
    <div class="container">
        <div class="product-detail" data-aos="fade-up">
            <div class="product-detail-grid">
                <div class="product-detail-image">
                    <img src="assets/images/product2.jpg" alt="Structural Steel" />
                </div>
                <div class="product-detail-content">
                    <h2>Complete Structural Steel Range</h2>
                    <p class="subhead">One‑stop source for all your structural steel needs.</p>
                    <p>We stock a comprehensive inventory of structural steel commodities, sourced from India’s leading manufacturers. Every product is quality‑checked and certified to meet industry standards. Our large warehouse ensures that even bulk orders are dispatched promptly.</p>

                    <h3>Commodities We Supply</h3>
                    <div class="commodity-grid">
                        <div class="commodity-item">
                            <i class="fas fa-pipe"></i>
                            <span>Pipes</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-grip-lines"></i>
                            <span>Beams</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-grip-lines-vertical"></i>
                            <span>Channel</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-angle-double-right"></i>
                            <span>Angle</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-circle"></i>
                            <span>Round Bar</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-th-large"></i>
                            <span>Plates</span>
                        </div>
                        <div class="commodity-item">
                            <i class="fas fa-file-alt"></i>
                            <span>Sheets</span>
                        </div>
                    </div>

                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Sourced from ISI‑certified manufacturers</li>
                        <li><i class="fas fa-check-circle"></i> Available in all standard sizes and grades</li>
                        <li><i class="fas fa-check-circle"></i> Custom cutting and processing on request</li>
                        <li><i class="fas fa-check-circle"></i> Suitable for SEZ (Special Economic Zone) supply</li>
                        <li><i class="fas fa-check-circle"></i> Just‑in‑time delivery to keep your project on schedule</li>
                    </ul>

                    <h3>Applications</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-building"></i> High‑rise building frameworks</li>
                        <li><i class="fas fa-bridge"></i> Bridge girders and trusses</li>
                        <li><i class="fas fa-industry"></i> Industrial sheds and workshops</li>
                        <li><i class="fas fa-ship"></i> Shipbuilding and offshore structures</li>
                        <li><i class="fas fa-train"></i> Railway and metro projects</li>
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