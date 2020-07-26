<html>
<title>Eugene's Laptop Website</title>
<meta charset="utf-8">
  <title>Eugene's Laptop Website</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
   <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<?php
	include ("header.html");
?>
<body>
 <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Brands</h3>
          <p class="section-description">This is where users can look for laptop information.</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">Asus</li>
              <li data-filter=".filter-card">Lenovo</li>
              <li data-filter=".filter-logo">Dell</li>
              <li data-filter=".filter-web">Acer</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="image/zenbook duo.jpg" alt="">
              <div class="details">
                <h4>Asus Zenbook Duo</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="image/zenbook 15.jpg" alt="">
              <div class="details">
                <h4>Asus Zenbook 15</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="asus rog g14.php">
              <img src="image/g14 zephyrus.jpg" alt="">
              <div class="details">
                <h4>Asus ROG Zephyrus G14</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="image/lenovo flex.jpg" alt="">
              <div class="details">
                <h4>Lenovo Flex 5G</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="image/lenovo thinkpad extreme.jpg" alt="">
              <div class="details">
                <h4>Lenovo Thinkpad Extreme</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="image/lenovo y740.jpg" alt="">
              <div class="details">
                <h4>Lenovo Legion Y740</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="image/dell g7.jpg" alt="">
              <div class="details">
                <h4>Dell G7</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="image/dell latitude.jpg" alt="">
              <div class="details">
                <h4>Dell Latitude</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="image/dell xps 15.jpg" alt="">
              <div class="details">
                <h4>Dell XPS 15</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="image/acer swift3.jpeg" alt="">
              <div class="details">
                <h4>Acer Swift 3</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="image/acer nitro5.jpg" alt="">
              <div class="details">
                <h4>Acer Nitro 5</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="image/acer trition.jpg" alt="">
              <div class="details">
                <h4>Acer Predator Trition 500</h4>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->


</body>

<?php
	include ("footer.html");
?>

</html>