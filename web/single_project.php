<?php
require_once 'core/init.php';
$id_file = mysqli_real_escape_string($koneksi, $_GET['id_file']);
$project_detail = tampilkan_project_detail($id_file);
?>

<section id="features" class="padd-section  wow fadeInUp">
  <div class="container">
    <div class="row">
<?php while($row = mysqli_fetch_assoc($project_detail)){ ?>
    <div class="col-md-6 col-lg-12">
      <div class="col-content feature-block">
      <center>
      <img src="admin/file/<?=$row['nama_file']?>" alt="img" class="thumbnail zoom img-thumbnail" width="300" height="300">
      </center>
            <h4><?=$row['judul']?></h4>
            <p><?=$row['isi']?></p>
      </div>
    </div>
<?php } ?>
    </div>
  </div>
</section> 