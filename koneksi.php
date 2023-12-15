<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "db_tiash"; //sesuaikan nama databasenya
$koneksi = mysqli_connect($server, $username, $pass, $db) or die ('Gagal terhubung ke database'); 
//untuk cek jika koneksi gagal ke database
?>