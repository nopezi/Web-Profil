<?php

require_once 'function.php';

include '../../blog/koneksi.php';

if(isset($_GET['id'])){
    
    if(hapus_riwayat($_GET['id'])){ 
        header('Location: ../riwayat.php');
    }else{
         echo 'gagal hapus data';
    }
}