<?php
// Koneksi
require('koneksi.php');

// GET OP
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// Carousel
$id_carr        = "";
$gambar_carr    = "";
$judul_carr     = "";
$isi_carr       = "";

$sukses         = "";
$error          = "";

?>

<body class="bg-success text-light">
    <!-- Header -->
    <header id="topHeader" class="container my-3">
        <img src="assets/images/TWH.png" alt="" width="50" class="me-3">
        <a class="navbar-brand me-3 text-light fs-5 fw-bold" href="index2.php">SDN 1 PURWOKERTO KULON</a>
        <img src="assets/images/BanyumasColor.png" alt="" width="50">
    </header>

    <!-- Navbar -->
    <nav id="navbarKita" class="navbar sticky-top navbar-dark navbar-expand-lg bg-danger">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Data Guru & Pegawai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kurikulum
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kurikulum SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="#">Program</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Kesiswaan SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="#">Program</a></li>
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Tata Tertib</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="galeri.php" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Fasilitas Sekolah</a></li>
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>