<?php 

function tampilkan(){
	global $koneksi;

	$query = "SELECT * FROM posting WHERE kategori='project'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_profil(){ // NAMPILIN PROFIL
	global $koneksi;

	$query = "SELECT * FROM posting WHERE kategori='profil'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_organisasi(){ // RIWAYAT ORGANISASI
	global $koneksi;

	$query = "SELECT * FROM riwayat WHERE kategori='organisasi' ORDER BY tahun";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_pendidikan(){ // RIWAYAT PENDIDIKAN
	global $koneksi;

	$query = "SELECT * FROM riwayat WHERE kategori='pendidikan' ORDER BY tahun";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_prestasi(){ // RIWAYAT PRESTASI
	global $koneksi;

	$query = "SELECT * FROM riwayat WHERE kategori='prestasi' ORDER BY tahun";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_pekerjaan(){ // RIWAYAT PEKERJAAN
	global $koneksi;

	$query = "SELECT * FROM riwayat WHERE kategori='pekerjaan' ORDER BY tahun";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_per_id($id_file){
	global $koneksi;

	$query = "SELECT * FROM posting WHERE id_file=$id_file";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_per_kategori($kategori){
	global $koneksi;

	$query = "SELECT * FROM posting WHERE kategori='$kategori'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

 ?>

