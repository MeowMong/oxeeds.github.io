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
$id_carr1        = "";
$id_carr2        = "";
$id_carr3        = "";
$gambar_carr1    = "";
$gambar_carr2    = "";
$gambar_carr3    = "";
$judul_carr1     = "";
$judul_carr2     = "";
$judul_carr3     = "";
$isi_carr1       = "";
$isi_carr2       = "";
$isi_carr3       = "";

$sql_carr1   = "SELECT * FROM carousel WHERE id_carr ='1'";
$q_carr1     = mysqli_query($koneksi, $sql_carr1);
while ($r_carr1 = mysqli_fetch_array($q_carr1)) {
    $id_carr1        = $r_carr1['id_carr'];
    $gambar_carr1    = $r_carr1['gambar_carr'];
    $judul_carr1     = $r_carr1['judul_carr'];
    $isi_carr1       = $r_carr1['isi_carr'];
}

$sql_carr2   = "SELECT * FROM carousel WHERE id_carr ='2'";
$q_carr2     = mysqli_query($koneksi, $sql_carr2);
while ($r_carr2 = mysqli_fetch_array($q_carr2)) {
    $id_carr2       = $r_carr2['id_carr'];
    $gambar_carr2    = $r_carr2['gambar_carr'];
    $judul_carr2     = $r_carr2['judul_carr'];
    $isi_carr2       = $r_carr2['isi_carr'];
}

$sql_carr3   = "SELECT * FROM carousel WHERE id_carr ='3'";
$q_carr3     = mysqli_query($koneksi, $sql_carr3);
while ($r_carr3 = mysqli_fetch_array($q_carr3)) {
    $id_carr3         = $r_carr3['id_carr'];
    $gambar_carr3    = $r_carr3['gambar_carr'];
    $judul_carr3     = $r_carr3['judul_carr'];
    $isi_carr3       = $r_carr3['isi_carr'];
}

// End of Carousel

$sukses         = "";
$error          = "";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN 1 PURWOKERTO KULON</title>

    <!-- Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free/css/fontawesome.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        .marginme {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <header id="topHeader" class="container my-2">
        <img src="assets/images/TWH.png" alt="" width="50" class="me-3">
        <a class="navbar-brand me-3 fs-5 fw-bold" href="index2.php">SDN 1 PURWOKERTO KULON</a>
        <img src="assets/images/BanyumasColor.png" alt="" width="50">
    </header>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light navbar-expand-lg bg-light container rounded shadow p-3 bg-body">
        <div class="container mx-2 my-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="profil.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="profil.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="profil.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="profil.php">Data Guru & Pegawai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kurikulum
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="kurikulum.php">Kurikulum SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="kurikulum.php">Program</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link active border border-success rounded link-success dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="kesiswaan.php">Kesiswaan SDN 1 Purwokerto Kulon</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php">Program</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php">Prestasi</a></li>
                            <li><a class="dropdown-item" href="kesiswaan.php">Tata Tertib</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="galeri.php">Fasilitas Sekolah</a></li>
                            <li><a class="dropdown-item" href="galeri.php">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="galeri.php">Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Program -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left fw-semibold pt-5">Program</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="my-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir dari Program -->

        <!-- Ekstrakurikuler -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left fw-semibold pt-5">Ekstrakurikuler</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="my-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir dari Ekstrakurikuler -->

        <!-- Prestasi -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left fw-semibold pt-5">Prestasi</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="my-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir dari Prestasi -->

        <!-- Tata Tertib -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left fw-semibold pt-5">Tata Tertib</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="my-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir dari Tata Tertib -->
    </main>

    <!-- Footer -->
    <div class="bg-secondary text-white">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col-md-6 mb-3">
                    <h3 class="fw-semibold">SDN 1 Purwokerto Kulon</h3>
                    <div class="row my-4">
                        <hr>
                        <div class="col">
                            <p class="fw-light" style="text-align: justify">“Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri”</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" style=" fill:#FFFFFF;">
                                    <path d="M 6.5 1 C 5.675781 1 5 1.675781 5 2.5 L 5 3 L 2.5 3 C 1.648438 3 1 3.753906 1 4.609375 L 1 12.386719 C 1 13.246094 1.648438 14 2.503906 14 L 13.496094 14 C 14.351563 14 15 13.242188 15 12.386719 L 15 4.613281 C 15 3.753906 14.351563 3 13.5 3 L 11 3 L 11 2.5 C 11 1.675781 10.324219 1 9.5 1 Z M 6.5 2 L 9.5 2 C 9.78125 2 10 2.21875 10 2.5 L 10 3 L 6 3 L 6 2.5 C 6 2.21875 6.21875 2 6.5 2 Z M 2.5 4 L 13.5 4 C 13.75 4 14 4.242188 14 4.613281 L 14 7 L 2 7 L 2 4.609375 C 2 4.242188 2.25 4 2.5 4 Z M 2 8 L 4 8 L 4 9 L 6 9 L 6 8 L 10 8 L 10 9 L 12 9 L 12 8 L 14 8 L 14 12.386719 C 14 12.757813 13.75 13 13.496094 13 L 2.503906 13 C 2.25 13 2 12.757813 2 12.386719 Z"></path>
                                </svg> Alamat</p>
                        </div>
                        <div class="col-9">
                            <p style="text-align: left">Jln. DI Panjaitan Gang Karangbaru III No.50 Kecamatan Purwokerto Selatan, Kabupaten Banyumas</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" style=" fill:#FFFFFF;">
                                    <path d="M 6.5 1 C 5.675781 1 5 1.675781 5 2.5 L 5 3 L 2.5 3 C 1.648438 3 1 3.753906 1 4.609375 L 1 12.386719 C 1 13.246094 1.648438 14 2.503906 14 L 13.496094 14 C 14.351563 14 15 13.242188 15 12.386719 L 15 4.613281 C 15 3.753906 14.351563 3 13.5 3 L 11 3 L 11 2.5 C 11 1.675781 10.324219 1 9.5 1 Z M 6.5 2 L 9.5 2 C 9.78125 2 10 2.21875 10 2.5 L 10 3 L 6 3 L 6 2.5 C 6 2.21875 6.21875 2 6.5 2 Z M 2.5 4 L 13.5 4 C 13.75 4 14 4.242188 14 4.613281 L 14 7 L 2 7 L 2 4.609375 C 2 4.242188 2.25 4 2.5 4 Z M 2 8 L 4 8 L 4 9 L 6 9 L 6 8 L 10 8 L 10 9 L 12 9 L 12 8 L 14 8 L 14 12.386719 C 14 12.757813 13.75 13 13.496094 13 L 2.503906 13 C 2.25 13 2 12.757813 2 12.386719 Z"></path>
                                </svg> Telepon</p>
                        </div>
                        <div class="col-9">
                            <p style="text-align: left">(0281) 6577339</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 16 16" style=" fill:#FFFFFF;">
                                    <path d="M 6.5 1 C 5.675781 1 5 1.675781 5 2.5 L 5 3 L 2.5 3 C 1.648438 3 1 3.753906 1 4.609375 L 1 12.386719 C 1 13.246094 1.648438 14 2.503906 14 L 13.496094 14 C 14.351563 14 15 13.242188 15 12.386719 L 15 4.613281 C 15 3.753906 14.351563 3 13.5 3 L 11 3 L 11 2.5 C 11 1.675781 10.324219 1 9.5 1 Z M 6.5 2 L 9.5 2 C 9.78125 2 10 2.21875 10 2.5 L 10 3 L 6 3 L 6 2.5 C 6 2.21875 6.21875 2 6.5 2 Z M 2.5 4 L 13.5 4 C 13.75 4 14 4.242188 14 4.613281 L 14 7 L 2 7 L 2 4.609375 C 2 4.242188 2.25 4 2.5 4 Z M 2 8 L 4 8 L 4 9 L 6 9 L 6 8 L 10 8 L 10 9 L 12 9 L 12 8 L 14 8 L 14 12.386719 C 14 12.757813 13.75 13 13.496094 13 L 2.503906 13 C 2.25 13 2 12.757813 2 12.386719 Z"></path>
                                </svg> Email</p>
                        </div>
                        <div class="col-9">
                            <p style="text-align: left">sdn1pwtk@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-3" style="text-align: right">
                </div>

                <div class="col mb-3" style="text-align: right">
                    <h5 class="fw-semibold">Ikuti Kami di</h5>
                    <hr class="my-4">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-1"><a href="sdn1pwtk@gmail.com" class="nav-link p-0 link-light">Facebook</a></li>
                        <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light">YouTube</a></li>
                        <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                        <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                        <li class="nav-item mb-1"><a href="#" class="nav-link p-0 link-light"></a></li>
                    </ul>
                </div>
            </footer>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2014 - 2022 SDN 1 Purwokerto Kulon. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Footer -->

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>