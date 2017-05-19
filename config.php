<?php
$host = "localhost";//ip host
$user = "root"; //user database
$pass = ""; // password database
$name = "easy_doctor"; //nama database

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>