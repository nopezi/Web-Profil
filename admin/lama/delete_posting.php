<?php 
include '../blog/koneksi.php';
$id = $_GET['id_file'];
mysqli_query($koneksi, "delete from posting where id_file='$id'");
header("location:posting.php");
 ?>