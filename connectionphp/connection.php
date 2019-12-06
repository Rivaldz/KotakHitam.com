<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "JobTesterDB";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
$conn = mysqli_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
