<?php
// Get the post ID from the URL
$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$current_page = 'blog';
include 'header.php';

// Define all blog posts data
$posts = [
    1 => [
        'title' => 'Top 5 Steel Industry Trends to Watch in 2026',
        'image' => 'assets/images/blog1.webp',
        'date' => 'June 15, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>The steel industry is undergoing a massive transformation driven by technology, sustainability, and shifting global demand. In 2026, several key trends are reshaping how steel is produced, traded, and used across the world.</p>
            <h3>1. Green Steel Production</h3>
            <p>One of the most significant trends is the push toward green steel. Manufacturers are investing in hydrogen‑based direct reduction and electric arc furnaces powered by renewable energy. This shift aims to reduce carbon emissions by up to 90% compared to traditional blast furnaces.</p>
            <h3>2. Digitalisation and AI</h3>
            <p>Artificial intelligence is revolutionising steel mills. From predictive maintenance that reduces downtime to AI‑driven quality control that ensures every batch meets strict standards, digitalisation is making production smarter and more efficient.</p>
            <h3>3. Circular Economy and Recycling</h3>
            <p>Recycling is no longer just a nice‑to‑have; it’s a business imperative. Steel is infinitely recyclable, and the industry is scaling up scrap‑based production to lower costs and environmental impact.</p>
            <h3>4. Advanced High‑Strength Steels (AHSS)</h3>
            <p>Automotive and construction sectors are demanding lighter, stronger materials. AHSS and ultra‑high‑strength steels are enabling lighter vehicles and taller buildings without compromising safety.</p>
            <h3>5. Global Supply Chain Resilience</h3>
            <p>Recent disruptions have highlighted the need for resilient supply chains. Steel producers are diversifying their sourcing and building larger inventories to ensure uninterrupted supply to customers worldwide.</p>
            <p>The future of steel is bright, and at Savani Steel, we are committed to staying ahead of these trends to serve you better.</p>
        '
    ],
    2 => [
        'title' => 'Why TMT Bars Are the Backbone of Modern Construction',
        'image' => 'assets/images/blog2.webp',
        'date' => 'June 8, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>TMT bars (Thermo‑Mechanically Treated bars) are the most widely used reinforcement material in construction. Their unique manufacturing process gives them a hard outer layer and a soft inner core, providing exceptional strength and ductility.</p>
            <h3>Superior Earthquake Resistance</h3>
            <p>One of the main reasons TMT bars are preferred in seismic zones is their ability to absorb energy during an earthquake. The ductile core allows the bar to elongate without fracturing, giving the structure time to sway and absorb shocks.</p>
            <h3>High Yield Strength</h3>
            <p>Grades like FE 500, FE 500D, and FE 550D offer high tensile strength, meaning they can bear heavy loads without bending or breaking. This makes them ideal for high‑rise buildings, bridges, and industrial structures.</p>
            <h3>Weldability and Bendability</h3>
            <p>TMT bars are easy to cut, bend, and weld on‑site, which speeds up construction and reduces labour costs. Their uniform surface also ensures a strong bond with concrete.</p>
            <h3>Corrosion Resistance</h3>
            <p>With the option of epoxy coating, TMT bars can withstand harsh environments, making them suitable for coastal and chemical‑exposed areas.</p>
            <p>At Savani Steel, we supply premium TMT bars that meet international standards, ensuring your projects stand the test of time.</p>
        '
    ],
    3 => [
        'title' => 'Innovative Uses of Structural Steel in Modern Architecture',
        'image' => 'assets/images/blog3.webp',
        'date' => 'May 28, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>Structural steel has been a cornerstone of architecture for over a century, but modern design has pushed its capabilities to new heights. Today, architects are using steel not only for strength but also for aesthetic expression.</p>
            <h3>Skyscrapers and Super‑tall Buildings</h3>
            <p>The Burj Khalifa, Shanghai Tower, and many other record‑setting buildings rely on steel frames to achieve incredible heights. Steel’s high strength‑to‑weight ratio allows for slender, elegant designs that can withstand wind and seismic forces.</p>
            <h3>Sustainable and Adaptive Re‑use</h3>
            <p>Steel is being used to repurpose old industrial buildings into modern offices and cultural centres. Its flexibility allows for large, open floor plans that can be adapted to various uses.</p>
            <h3>Curved and Free‑form Structures</h3>
            <p>With advances in fabrication technology, steel can now be curved and shaped into complex geometries. Iconic buildings like the Guggenheim Bilbao and the Walt Disney Concert Hall are prime examples.</p>
            <h3>Lightweight Roofs and Canopies</h3>
            <p>Steel trusses and tensile structures create expansive, column‑free spaces that are perfect for stadiums, airports, and exhibition halls.</p>
            <p>At Savani Steel, we supply structural steel for some of the most ambitious architectural projects across India, helping turn visionary designs into reality.</p>
        '
    ],
    4 => [
        'title' => 'Sustainable Steel: How We\'re Reducing Our Carbon Footprint',
        'image' => 'assets/images/blog4.webp',
        'date' => 'May 15, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>Sustainability is no longer a buzzword – it is a core business strategy. At Savani Steel, we have implemented several initiatives to reduce our environmental impact while maintaining product quality.</p>
            <h3>Energy‑Efficient Manufacturing</h3>
            <p>We have upgraded our rolling mills with energy‑efficient motors and variable‑speed drives, reducing electricity consumption by 15% over the past two years.</p>
            <h3>Waste Recycling and Reuse</h3>
            <p>Almost all of our scrap steel is recycled back into the production process. We also partner with local recyclers to ensure that packaging and other materials are diverted from landfills.</p>
            <h3>Green Logistics</h3>
            <p>We are optimising delivery routes and using fuel‑efficient vehicles to cut down on transportation emissions. Bulk shipping and just‑in‑time deliveries also help reduce the overall carbon footprint.</p>
            <h3>Sourcing from Sustainable Mills</h3>
            <p>We prioritise suppliers that use renewable energy and have clear environmental policies. This ensures that the steel we supply is as green as possible.</p>
            <p>We believe that a sustainable steel industry is a responsible one, and we are committed to leading by example.</p>
        '
    ],
    5 => [
        'title' => 'The Future of Steel: Smart Manufacturing and AI',
        'image' => 'assets/images/blog5.webp',
        'date' => 'May 2, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>Industry 4.0 is transforming steel production, and artificial intelligence is at the forefront of this revolution. Smart manufacturing is making steel mills more efficient, safer, and more responsive to market needs.</p>
            <h3>Predictive Maintenance</h3>
            <p>AI‑powered sensors monitor equipment in real time, predicting failures before they occur. This reduces downtime and extends the life of expensive machinery.</p>
            <h3>Quality Control with Machine Vision</h3>
            <p>Advanced cameras and deep learning algorithms inspect every inch of steel for defects, ensuring that only top‑quality products reach customers.</p>
            <h3>Supply Chain Optimisation</h3>
            <p>AI analyses market trends, shipping data, and inventory levels to optimise production schedules and minimise stockouts.</p>
            <h3>Energy Management</h3>
            <p>Smart grids and AI‑controlled furnaces adjust energy usage in real time, saving costs and reducing the carbon footprint.</p>
            <p>The future of steel is smart, and Savani Steel is embracing these technologies to deliver better products and service to our clients.</p>
        '
    ],
    6 => [
        'title' => 'Choosing the Right Steel Grade for Your Project',
        'image' => 'assets/images/blog6.webp',
        'date' => 'April 20, 2026',
        'author' => 'Admin',
        'full_content' => '
            <p>Selecting the correct steel grade is essential for the success of any construction or manufacturing project. Here’s a simple guide to help you choose the right type of steel for your specific needs.</p>
            <h3>Structural Steel Grades</h3>
            <p>For load‑bearing structures, grades like IS 2062 (E250, E350) are common. They provide the strength and weldability required for building frames and bridges.</p>
            <h3>TMT Bar Grades</h3>
            <p>FE 500 and FE 500D are versatile choices for residential and commercial buildings. For high‑rise and heavy‑duty projects, FE 550D is recommended.</p>
            <h3>High‑Strength Low‑Alloy (HSLA) Steels</h3>
            <p>These offer better mechanical properties and corrosion resistance. They are ideal for offshore platforms and chemical plants.</p>
            <h3>Stainless Steel</h3>
            <p>For applications requiring corrosion resistance, stainless steel (grades 304, 316) is the best option, though it is more expensive.</p>
            <h3>Customised Solutions</h3>
            <p>At Savani Steel, we help you assess your requirements and recommend the most cost‑effective and durable steel grade for your project.</p>
            <p>Get in touch with our team today, and we’ll guide you through the selection process.</p>
        '
    ]
];

// Ensure we have a valid post ID, fallback to first post
if (!isset($posts[$post_id])) {
    $post_id = 1;
}

$post = $posts[$post_id];
?>

<!-- ============================================================
SINGLE POST PAGE BANNER
============================================================ -->
<section class="page-banner" style="min-height: 300px; display: flex; align-items: center;">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
            <a href="blogs.php">Blogs</a>
            <span class="separator"><i class="fas fa-chevron-right" style="font-size:10px;"></i></span>
            <span class="current"><?php echo htmlspecialchars($post['title']); ?></span>
        </div>
        <h1><?php echo htmlspecialchars($post['title']); ?></h1>
        
    </div>
</section>

<!-- ============================================================
SINGLE POST CONTENT
============================================================ -->
<section class="blog-single-section">
    <div class="container">
        <div class="blog-single-wrapper">
            <div class="blog-single-image">
                <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" />
            </div>
            <div class="blog-single-content">
                <?php echo $post['full_content']; ?>
                <div class="blog-single-footer">
                    <a href="blog.php" class="btn-outline-dark"><i class="fas fa-arrow-left" style="margin-right:8px;"></i> Back to Blog</a>
                    <a href="contact.php" class="btn-primary">Get a Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>