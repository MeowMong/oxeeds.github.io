<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "se2020_sdn1pwtk";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

// Cek Koneksi
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

?>
