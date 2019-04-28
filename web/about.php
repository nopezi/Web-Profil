<?php 
require_once "core/init.php"; 

$profil = tampilkan_profil();

?>

<section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-2">
<?php while($p = mysqli_fetch_assoc($profil)){ ?> 
          <!-- <img src="theme/img/about-img.png" alt="About"> -->
          <img src="admin/file/<?=$p['foto']?>" alt="About" class="img-circle">
        </div>

        <div class="col-md-7 col-lg-7">
          <div class="about-content">
         
            <h2><span><?=$p['nama_depan']?></span><?=$p['nama_belakang']?></h2>
            <p><?=$p['detail']?></p>
            <h4>About Me</h4>
            <ul class="list-unstyled">

              <li><i class="glyphicon glyphicon-menu-right"></i> Iam <?=$p['status_kawin']?></li>
              <li><i class="glyphicon glyphicon-menu-right"></i> Born in <?=$p['tempat_lahir']?></li>
              <li><i class="glyphicon glyphicon-menu-right"></i> On <?=$p['tanggal_lahir']?></li>
              <li><i class="glyphicon glyphicon-menu-right"></i> <?=$p['hobi']?> its my hobby</li>
              <li><i class="glyphicon glyphicon-menu-right"></i> and now live in <?=$p['domisili']?></li>
            </ul>
<?php } ?>
          </div>
        </div>

      </div>
    </div>
  </section>