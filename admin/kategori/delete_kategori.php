<?php 
include '../../blog/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from kategori where id='$id'");
header("location:../kategori.php");
 ?>