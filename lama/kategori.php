<?php 
require_once "core/init.php";
$kategori = $_GET['kategori'];
 ?>

 

	<?php require_once 'menu2.php' ?>

<!-- gambar atas -->



<!-- bagian badan -->

<div class="container-fluid">



<div class="panel-body">


	
	
		<div class="row">

			<div class="col-md-9">

			<!-- judul -->

			 <div class="recent" style="background:#26b7ff">
			 	<div class="terbaru" style="margin:5px 5px;color:white;font-size:18px">
			 	<b>Aplikasi Yang pernah dibuat</b>
			    </div>
			 </div>

			 <!-- kiri -->

<?php
if (isset($_GET['kategori'])) { 
	$artikel = tampilkan_per_kategori($kategori);
	$num_char = 200;
	while($row = mysqli_fetch_assoc($artikel)) {
	
 ?>		
	
 		<div class="jumbotron" style="background:#fff;border:2px solid #26b7ff;margin-top:10px;margin-bottom:10px;">
 		<div class="media">
 			<h3 class="display-3"><a href="single.php?id_file=<?=$row['id_file']?>" title=""><?=$row['judul']?></a></h3>
 			<div class="media-left">
 				<img class="media-object thumbnail" width="200" src="admin/file/<?=$row['nama_file']?>" alt="">
 			</div>
 			<div class="media-body">
 				<p class="text-right"><?=substr($row['isi'], 0, $num_char) .'...'?></p>
 			<hr class="m-y-md">
 			<p style="font-size: 15px"><i class="glyphicon glyphicon-tag"></i> <?=$row['kategori']?></p>
 			</div>
 		</div>
 		</div>


<?php 
} 
}else {
	echo 'gagal';
}

?>
		


			
		</div>

<?php require_once 'sidebar.php'; ?>


</div>


</div>

<!-- bagian kaki -->


<?php require_once 'footer2.php'; ?>

	
</body>
<script src="http://nopezi.ga/js/jquery.min.js"></script>
<script src="http://nopezi.ga/js/bootstrap.min.js"></script>
</html>