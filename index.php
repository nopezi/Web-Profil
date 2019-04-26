<?php 
require_once "core/init.php"; 
require_once 'menu.php';

$num_char = 200;
$num_char2 = 400;
$artikel = tampilkan();
$profil = tampilkan_profil();



?>


    <!-- Header -->
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Welcome</h1>
        <h3 class="mb-5">
          <em>P321 Portofolio</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <?php while ($row2 = mysqli_fetch_assoc($profil)){ ?>
            <h2 style="color: #26b7ff"><?=$row2['judul'] ?></h2>
            <img src="admin/file/<?=$row2['nama_file'] ?>" alt="" width="200" height="250" class="img-rounded" >
            <p style="color: #26b7ff" class="lead mb-5"><?=substr($row2['isi'], 0, $num_char2). '...'?></p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">Show More</a>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
      <div class="container">
        <div class="content-section-heading">
          <h3 class="text-secondary mb-0">Junior Web Programming</h3>
          <h2 class="mb-5">My Skill
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- nopezi.ga -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5943791676848690"
     data-ad-slot="2121745973"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
              <strong>HTML</strong>
            </h4>
            <!-- <p class="text-faded mb-0">Looks great on any screen size!</p> -->
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-pencil"></i>
            </span>
            <h4>
              <strong>PHP</strong>
            </h4>
            <!-- <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p> -->
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-like"></i>
            </span>
            <h4>
              <strong>CSS</strong>
            </h4>
            <!-- <p class="text-faded mb-0">Millions of users
              <i class="fas fa-heart"></i>
              Start Bootstrap!</p> -->
          </div>
          <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-mustache"></i>
            </span>
            <h4>
              <strong>JAVASCRIPT</strong>
            </h4>
            <!-- <p class="text-faded mb-0">I mustache you a question...</p> -->
          </div>
        </div>
      </div>
    </section>


<!-- Portfolio ------------------------------------------------>


    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 style="color: #26b7ff" class="mb-5">Recent Projects</h2>
        </div>
        <div class="row no-gutters">
<?php while ($row = mysqli_fetch_assoc($artikel)) { ?>          
          <div class="col-lg-6">
            <h2><?=$row['judul']?></h2>
            <a class="portfolio-item" href="single.php?id_file=<?=$row['id_file']?>">
              <span class="caption">
                <span class="caption-content">
                  
                  <p class="mb-0"><?=substr($row['isi'], 0, $num_char). '...'?></p>
                </span>
              </span>
              <img class="img-fluid" src="admin/file/<?=$row['nama_file']?>" alt="">
            </a>
          </div>
<?php } ?>
          
        </div>
      </div>
    </section>

    <!-- Callout -->
   <!--  <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Welcome to
          <em>your</em>
          next website!</h2>
        <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/template-overviews/stylish-portfolio/">Download Now!</a>
      </div>
    </section> -->


    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
        <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
      </div>
    </section>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508.56130377612874!2d110.37253407546211!3d-7.824874544396953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a5d92b35f7%3A0x59679715d5b949b6!2zN8KwNDknMzAuMCJTIDExMMKwMjInMjAuNiJF!5e0!3m2!1sid!2sid!4v1534581482530&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508.56130377612874!2d110.37253407546211!3d-7.824874544396953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a5d92b35f7%3A0x59679715d5b949b6!2zN8KwNDknMzAuMCJTIDExMMKwMjInMjAuNiJF!5e0!3m2!1sid!2sid!4v1534581482530"></a>
      </small>
    </section>

    <!-- Footer -->
    
    <?php require_once 'footer.php'; ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
