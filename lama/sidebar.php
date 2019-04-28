<div class="col-md-3">

	<div class="populer" style="background:#26b7ff">
				
			
		<div class="populer" style="margin:5px 5px;color:white;font-size:18px">
		<b>Recent Post</b>
		</div>
	</div>

			<div class="col-md-12">
			  
			  <div class="row">

			  	<div class="col-md-12" style="margin-top:5px;background:#fff;border:2px solid skyblue">
			  	<div class="badan1" style="margin-left:-15px">
			  		<div class="teks2" style="margin:10px 10px 5px">
<?php 
$sidebar = tampilkan();
while ($d = mysqli_fetch_assoc($sidebar)) {
 ?>
			 			<div class="list-group">
			 				<a href="single.php?id_file=<?=$d['id_file']?>" class="list-group-item"><?=$d['judul']?></a>
			 			</div>
<?php } ?>
			 	</div>
			  </div>


			  </div>
			</div>

			</div>

			
</div>