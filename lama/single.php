<?php 
require_once "core/init.php";


$error = '';
$id = $_GET['id_file'];


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
if (isset($_GET['id_file'])) {
	$artikel = tampilkan_per_id($id);
	while($row = mysqli_fetch_assoc($artikel)) {
 ?>		

			 <div class="col-md-12" style="background:#fff;border:2px solid #26b7ff;margin-top:10px;margin-bottom:10px;">
			     <h4><b><?=$row['judul']?></b></h4>
			 	<div class="">
			 		<img class="thumbnail img-rounded img-responsive" src="admin/file/<?=$row['nama_file']?>" alt="">
			 	</div>

			 	<div class="teks1" style="margin:10px 5px 10px">
			 		
			 		<p>
			 		    <?=$row['isi']?>
			 		</p>
			 		
			 	</div>

			 	<p style="font-size: 13px"><i class="glyphicon glyphicon-tag"></i> 
			 		<a href="kategori.php?kategori=<?=$row['kategori']?>" title="">
			 			<?=$row['kategori']?>
			 		</a>
			 	</p>

			 </div>
	
			</div>


<?php 
}
} 
require_once 'sidebar.php';
?>
		



</div>


</div>

<!-- bagian kaki -->

<?php require_once 'footer2.php'; ?>
	
</body>
<script src="http://nopezi.ga/js/jquery.min.js"></script>
<script src="http://nopezi.ga/js/bootstrap.min.js"></script>
</html>