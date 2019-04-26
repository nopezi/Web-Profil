<html>
<head>
	<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
	<div class="container">
		<form action="aksi.php" class="form-group" method="post" enctype="multipart/form-data">
		<input class="form-control" type="text" name="judul" placeholder="judul"><br>
		<textarea class="form-group col-md-12" name="isi" placeholder="artikel"></textarea>
		<select class="form-control col-md-3" name="kategori">
			<option>Kategori</option>
			<option value="Project">Project</option>
			<option value="Artikel">Artikel</option>
		</select>
		<input style="width: 300px; margin-top: 100px;" class="form-control" type="file" name="file"><br>
		<input type="submit" class="btn btn-primary" name="upload" value="Simpan">
	</form>

	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Judul</th>
				<th>Gambar</th>
				<th>Isi</th>
				<th>Kategori</th>
			</tr>
		</thead>
			<?php
			include '../blog/koneksi.php'; 
			$data = mysqli_query($koneksi, "select * from upload");
			$no = 1;
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?=$no++?></td>
				<td>
					<?=$d['judul'] ?>
				</td>
				<td>
					<img src="<?php echo "file/".$d['nama_file']; ?>" width="300" height="300">
				</td>
				<td>
					<?=$d['isi'] ?>
				</td>
				<td>
					<?=$d['kategori'] ?>
				</td>		
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>