<?php 

function tampilkan(){
	global $koneksi;

	$query = "SELECT * FROM posting WHERE kategori='project'";
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

