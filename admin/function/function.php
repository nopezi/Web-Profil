<?php

// TAMPIL DATA

function tampilkan_riwayat(){
	global $koneksi;

	$query = "SELECT * FROM riwayat";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_riwayat_edit($id_file){
	global $koneksi;

	$query = "SELECT * FROM riwayat WHERE id='$id_file'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_kategori(){
	global $koneksi;

	$query = "SELECT * FROM kategori";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_posting(){
	global $koneksi;

	$query = "SELECT * FROM posting";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_profil(){
	global $koneksi;

	$query = "SELECT * FROM pribadi";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

// TAMPIL EDIT

function tampilkan_posting_edit($id_file){
	global $koneksi;

	$query = "SELECT * FROM posting WHERE id_file='$id_file'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

function tampilkan_profil_edit($id){
	global $koneksi;

	$query = "SELECT * FROM pribadi WHERE id='$id'";
	$hasil = mysqli_query($koneksi, $query)or die(mysqli_error());

	return $hasil;
}

// EDIT DATA

function edit_profil(
    $id, $nama, $nama_depan, $nama_belakang, $tempat_lahir, $tanggal_lahir, $domisili, $detail, $status
    ){
    global $koneksi;

    $query = "UPDATE pribadi SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', domisili='$domisili', detail='$detail', status_kawin='$status', foto='$nama' WHERE id='$id'";

    return run($query);
}

function edit_posting($id_file, $nama, $judul, $isi, $kategori){
    global $koneksi;

    $query = "UPDATE posting SET nama_file='$nama', judul='$judul', isi='$isi', kategori='$kategori' WHERE id_file='$id_file'";

    return run($query);
}

function edit_riwayat($id, $tahun, $keterangan, $lokasi, $kategori){

    global $koneksi;

    $query = "UPDATE riwayat SET tahun='$tahun', keterangan='$keterangan', lokasi='$lokasi', kategori='$kategori' WHERE id='$id'";

    return run($query);
}

function tambah_data_riwayat($tahun, $keterangan, $lokasi, $kategori){

	$query = "INSERT INTO riwayat (tahun, keterangan, lokasi, kategori) VALUES
			 ('$tahun', '$keterangan', '$lokasi', '$kategori')";

	return run($query);
}

function tambah_data_posting($nama, $judul, $isi, $kategori){

	$query = "INSERT INTO posting VALUES(NULL, '$nama', '$judul', '$isi', '$kategori')";

	return run($query);
}

// HAPUS DATA

function hapus_riwayat($id){
    
    $query = "DELETE from riwayat where id='$id'";

    return run($query);

}

function hapus_posting($id){
    
    $query = "DELETE from posting where id_file='$id'";

    return run($query);

}

function run($query){
    global $koneksi;

    if(mysqli_query($koneksi, $query)) return true;
    else return false;
}

?>