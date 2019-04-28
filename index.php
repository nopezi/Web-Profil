<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nopezi Web Profile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="gambar/logo.png" rel="icon">
  <link href="theme/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <!-- <link href="theme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  
  <!-- Libraries CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <link href="theme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="theme/css/style_progress.css">
  

  <link href="theme/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="theme/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="theme/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="theme/lib/animate/animate.min.css" rel="stylesheet">
  <link href="theme/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  
  <!-- Main Stylesheet File -->
  <link href="theme/css/style.css" rel="stylesheet">
  <style>
/**THE SAME CSS IS USED IN ALL 3 DEMOS**/    
/**gallery margins**/  
ul.gallery{    
margin-left: 3vw;     
margin-right:3vw;  
}    

.zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {
/**adjust scale to desired size, 
add browser prefixes**/
-ms-transform: scale(2.5);    
-moz-transform: scale(2.5);  
-webkit-transform: scale(2.5);  
-o-transform: scale(2.5);  
transform: scale(2.5);    
position:relative;      
z-index:100;  
}

/**To keep upscaled images visible on mobile, 
increase left & right margins a bit**/  
@media only screen and (max-width: 768px) {   
ul.gallery {      
margin-left: 15vw;       
margin-right: 15vw;
}

/**TIP: Easy escape for touch screens,
give gallery's parent container a cursor: pointer.**/
.DivName {cursor: pointer}
}
</style>
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
<?php 
require_once "core/init.php"; 

if(!empty($_GET['id_file'])){
  $id_file = mysqli_real_escape_string($koneksi, $_GET['id_file']);
  $project_detail = tampilkan_project_detail($id_file);
  require_once 'web/single_project.php'; //HALAMAN SINGLE PROJECT
}else{
?>
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
  </section>
  
  <!-- #hero -->

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
      <div class="row">
<!-- RIWAYAT SEKOLAH -->   
<?php require_once 'web/riwayat_sekolah.php'; ?>
<!-- RIWAYAT ORGANISASI -->
<?php require_once 'web/riwayat_organisasi.php'; ?>
      </div>
    </div>

    <div class="container">
      <div class="row">
<!-- RIWAYAT PRESTASI -->
<?php require_once 'web/riwayat_prestasi.php'; ?>
<!-- RIWAYAT PEKERJAAN -->
<?php require_once 'web/riwayat_pekerjaan.php'; ?>

      </div>
    </div>
 
  </section>

<!-- PROGRESS SKILL -->
  <?php require_once 'web/progress.php'; ?>
<!-- LAST PROJECT -->
  <?php require_once 'web/last_project.php'; ?>
<!-- LAST ARTIKEL -->
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
  <?php require_once 'web/langganan.php' ?>
  <?php } ?>
  <!--==========================
    Contact Section
  ============================-->
  <?php require_once 'web/kontak.php'; ?>
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
