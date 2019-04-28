<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nopezi Web Profile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="gambar/logo.PNG" rel="icon">
  <link href="theme/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <!-- <link href="theme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  
  <!-- Libraries CSS Files -->
  <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  <!-- <link href="theme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="theme/css/style_progress.css">
  

  <link href="theme/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="theme/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="theme/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="theme/lib/animate/animate.min.css" rel="stylesheet">
  <link href="theme/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  
  <!-- Main Stylesheet File -->
  <link href="theme/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <?php require_once 'web/menu.php'; ?>
  
  <!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Welcome to our website</h1>
      <h2>this is my profile web &amp; more...</h2>
      <img src="theme/img/hero-img.png" alt="Hero Imgs">
      <!-- <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div> -->
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  

  <!--==========================
    About Us Section
  ============================-->
  
  <?php require_once 'web/about.php'; ?>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Hystori</h2>
        <p class="separator">My biography</p>
      </div>
    </div>

    <div class="container">
      <div class="row row-table">

<!-- RIWAYAT SEKOLAH -->
        
        <?php require_once 'web/riwayat_sekolah.php'; ?>

<!-- RIWAYAT ORGANISASI -->

        <?php require_once 'web/riwayat_organisasi.php'; ?>

      </div>
    </div>
  

    <div class="container">
      <div class="row row-table">

<!-- RIWAYAT PRESTASI -->

        <?php require_once 'web/riwayat_prestasi.php'; ?>

<!-- RIWAYAT PEKERJAAN -->

        <?php require_once 'web/riwayat_pekerjaan.php'; ?>
        

      </div>
    </div>

    
  </section>
  

  <!--==========================
    Team Section
  ============================-->
  


  <!--==========================
    Testimonials Section
  ============================-->


  <!--==========================
    Pricing Table Section
  ============================-->

  <?php require_once 'web/progress.php'; ?>

  <!--==========================
    Blog Section
  ============================-->
  
  <?php require_once 'web/last_post.php'; ?>

<!--==========================
    Screenshots Section
  ============================-->

  <?php require_once 'web/slide_foto.php'; ?>

  <!--==========================
    Video Section
  ============================-->

  <?php require_once 'web/video_youtube.php'; ?>


  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact</h2>
        <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  
  <?php require_once 'web/footer.php'; ?>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <script src="theme/lib/jquery/jquery.min.js"></script>
  <script src="theme/lib/jquery/jquery-migrate.min.js"></script>
  <script src="theme/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="theme/lib/superfish/hoverIntent.js"></script>
  <script src="theme/lib/superfish/superfish.min.js"></script>
  <script src="theme/lib/easing/easing.min.js"></script>
  <script src="theme/lib/modal-video/js/modal-video.js"></script>
  <script src="theme/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="theme/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="theme/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="theme/js/main.js"></script>

</body>
</html>
