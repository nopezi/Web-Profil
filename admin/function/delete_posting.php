<?php

require_once 'function.php';
include '../../blog/koneksi.php';
$nama = $_GET['nama_file'];


if(isset($_GET['id_file'])){
    
    if(hapus_posting($_GET['id_file'])){ 

        unlink($lokasi_gambar);
        header('Location: ../posting.php');
        // echo $lokasi_gambar = "../file/".$nama;
        
    }else{
         echo 'gagal hapus data';
    }
}