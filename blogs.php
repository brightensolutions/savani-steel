<?php
$current_page = 'blog';
include 'header.php';
?>

<!-- PAGE BANNER -->
<section class="page-banner">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
            <span class="current">Blogs</span>
        </div>
        <h1>Our Blogs</h1>
        <p>Insights, updates and expert advice from the steel industry — straight from our team.</p>
    </div>
</section>

<!-- BLOG GRID -->
<section class="blog-section">
    <div class="container">
        <div class="blog-main">
            <!-- Post 1 -->
            <article class="blog-post" data-aos="fade-up">
                <div class="blog-post-image">
                    <img src="assets/images/blog1.webp" alt="Steel Industry Trends" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=1">Top 5 Steel Industry Trends to Watch in 2026</a></h2>
                    <p class="blog-excerpt">The steel industry is evolving rapidly with new technologies, sustainability initiatives, and changing market demands. In this post, we explore the top trends that are shaping the future of steel manufacturing and supply.</p>
                    <a href="blog-single.php?id=1" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Post 2 -->
            <article class="blog-post" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-post-image">
                    <img src="assets/images/blog2.webp" alt="TMT Bars Benefits" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=2">Why TMT Bars Are the Backbone of Modern Construction</a></h2>
                    <p class="blog-excerpt">TMT bars offer exceptional strength, ductility, and earthquake resistance. Learn why they are the preferred choice for builders and engineers around the world.</p>
                    <a href="blog-single.php?id=2" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Post 3 -->
            <article class="blog-post" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-post-image">
                    <img src="assets/images/blog3.webp" alt="Structural Steel Applications" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=3">Innovative Uses of Structural Steel in Modern Architecture</a></h2>
                    <p class="blog-excerpt">From iconic skyscrapers to sustainable bridges, structural steel is enabling architects to push boundaries. Discover some of the most innovative projects that rely on our steel.</p>
                    <a href="blog-single.php?id=3" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Post 4 -->
            <article class="blog-post" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-post-image">
                    <img src="assets/images/blog4.webp" alt="Sustainable Steel" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=4">Sustainable Steel: How We're Reducing Our Carbon Footprint</a></h2>
                    <p class="blog-excerpt">Sustainability is at the heart of our operations. Learn about the steps we're taking to reduce emissions, recycle more, and build a greener future for the steel industry.</p>
                    <a href="blog-single.php?id=4" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Post 5 -->
            <article class="blog-post" data-aos="fade-up" data-aos-delay="400">
                <div class="blog-post-image">
                    <img src="assets/images/blog5.webp" alt="Smart Manufacturing" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=5">The Future of Steel: Smart Manufacturing and AI</a></h2>
                    <p class="blog-excerpt">Artificial intelligence and automation are transforming the steel industry. From predictive maintenance to quality control, discover how smart factories are shaping the future of steel production.</p>
                    <a href="blog-single.php?id=5" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Post 6 -->
            <article class="blog-post" data-aos="fade-up" data-aos-delay="500">
                <div class="blog-post-image">
                    <img src="assets/images/blog6.webp" alt="Steel Grades" />
                </div>
                <div class="blog-post-content">
                    <h2><a href="blog-single.php?id=6">Choosing the Right Steel Grade for Your Project</a></h2>
                    <p class="blog-excerpt">Not all steel is created equal. We break down the different grades of steel and help you choose the right one for your construction, manufacturing, or infrastructure project.</p>
                    <a href="blog-single.php?id=6" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>