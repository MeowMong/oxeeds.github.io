<?php

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

// Cek Koneksi
$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}
