
		<?php 
		include '../blog/koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$judul = $_POST['judul'];
			$isi = $_POST['isi'];
			$kategori = $_POST['kategori'];	
 
			if ($nama == "" || $judul == "" || $isi == "" || $kategori == "") {
				echo '<script> language="javascript">alert("ISI DATA YANG LENGKAP"); document.location="posting.php";</script>';
			}else {
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 104407000){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($koneksi, "INSERT INTO posting VALUES(NULL, '$nama', '$judul', '$isi', '$kategori')");
					if($query){
						echo '<script> language="javascript">alert("FILE BERHASIL DI UPLOAD"); document.location="posting.php";</script>';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo '<script> language="javascript">alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN"); document.location="tambah_posting.php";</script>';
			}
			}
		}
		?>
