<?php 

$user = 'root';
$password = '';
$database = 'nopezi';
$host = 'localhost';

$koneksi = mysqli_connect($host, $user, $password);
mysqli_select_db($koneksi, $database);

 ?>