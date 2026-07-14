<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Savani Steel | TMT Bars & Structural Steel</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png" />
  
  <!-- Google Fonts + Font Awesome + AOS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800;14..32,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
  
  <!-- Ensure hamburger icon is visible on mobile (fallback) -->
  <style>
    /* In case your external CSS doesn't cover this, we ensure the hamburger is visible */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 4px;
      z-index: 1001;
    }
    .hamburger span {
      display: block;
      width: 26px;
      height: 2.5px;
      background: #fff;
      border-radius: 4px;
      transition: 0.3s;
    }
    /* On mobile, show hamburger */
    @media (max-width: 840px) {
      .hamburger {
        display: flex;
      }
    }
    /* When header is scrolled, hamburger lines become dark */
    .header.scrolled .hamburger span {
      background: var(--dark, #0b1a2f);
    }
    /* When mobile nav is open, hamburger lines become white */
    .nav.open + .hamburger span,
    .nav.open ~ .hamburger span {
      background: #fff !important;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="header" id="header">
  <div class="header-inner">
    <a href="index.php" class="brand">
      <img src="assets/images/logo-white.png" alt="Savani Steel" class="logo-light" />
      <img src="assets/images/logo.png" alt="Savani Steel" class="logo-dark" />
    </a>
    <nav class="nav" id="mainNav">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <!-- Products dropdown -->
      <span class="nav-item-dropdown" id="productsDropdown">
        <a href="products.php" id="productsLink" aria-expanded="false">
          Products <i class="fas fa-chevron-down dropdown-caret"></i>
        </a>
        <div class="dropdown-menu">
          <a href="tmt-bar.php">TMT Bars</a>
          <a href="structural-steel-commodities.php">Structural Steel</a>
        </div>
      </span>
      <a href="blogs.php">Blogs</a>
      <a href="contact.php">Contact Us</a>
      <a href="contact.php" class="btn-outline">Get a Quote</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
<!-- end header -->

<script src="assets/js/nav.js"></script>