
		<?php 
		include '../../blog/koneksi.php';
		if($_POST['upload']){
			$kategori = $_POST['kategori'];	
 
			if ($kategori == "") {
				echo '<script> language="javascript">alert("ISI DATA YANG LENGKAP"); document.location="../tambah_kategori.php";</script>';
			}else {
				$query = mysqli_query($koneksi, "INSERT INTO kategori VALUES(NULL, '$kategori')");
					if($query){
                        header("location:../kategori.php");
					}
			}
		}
		?>
