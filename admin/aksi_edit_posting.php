
		<?php 
		// include '../blog/koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$id_file = $_POST['id_file'];
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$judul = $_POST['judul'];
			$isi = $_POST['isi'];
			$kategori = $_POST['kategori'];	
 
			if (empty($nama) || empty(trim($judul)) || empty(trim($isi)) || empty($kategori)) {
				$error = "Isi data yang lengkap";
			}else {
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 104407000){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysqli_query($koneksi, "UPDATE posting SET nama_file='$nama', judul='$judul', isi='$isi', kategori='$kategori' WHERE id_file='$id_file'");
					if($query){
						header("location: posting.php");
					}else{
						$error = "Gagal mengupload gambar";
					}
				}else{
					$error = "Ukuran file terlalu besar";
				}
			}else{
				$error = "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
			}
			}
		}
		?>
