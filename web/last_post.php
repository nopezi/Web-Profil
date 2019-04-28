<?php 
require_once "core/init.php"; 

$artikel = tampilkan_artikel();

?>

<section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Latest Articel</h2>
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->

      </div>
    </div>

    <div class="container">
      <div class="row">

<?php while($p = mysqli_fetch_assoc($artikel)){ ?>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="admin/file/<?=$p['nama_file']?>" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#"><?=$p['judul']?></a></h4>
              <!-- <span>05, juin 2017</span> -->
              <a class="pull-right readmore" href="index.php?id_file=<?=$p['id_file']?>">read more</a>
            </div>
          </div>
        </div>

<?php } ?>        

      </div>
    </div>
  </section>