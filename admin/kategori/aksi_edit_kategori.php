
		<?php 
		include '../../blog/koneksi.php';
		if($_POST['upload']){
			// $ekstensi_diperbolehkan	= array('png','jpg');
			$id = $_POST['id'];
			$kategori = $_POST['kategori'];	
 
			if ($kategori == "") {
				echo '<script> language="javascript">alert("ISI DATA YANG LENGKAP"); document.location="../edit_kategori.php?id='.$id .'";</script>';
			}else {
                $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id='$id'");
					if($query){
						header("location:../kategori.php");
					}
			}
		}
		?>
