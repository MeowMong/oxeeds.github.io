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
                        <a class="nav-link active border border-success rounded link-success" aria-current="page" href="#">Beranda</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li class="nav-item mx-2">
                        <a href="admin/index.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="h-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="assets/images/<?php echo $gambar_carr1 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>SELAMAT DATANG DI<br />
                            <span class="fw-bold">SDN 1 PURWOKERTO KULON</span>
                        </h1>
                        <p><?php echo $isi_carr1 ?></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/images/<?php echo $gambar_carr2 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $judul_carr2 ?></h5>
                        <p><?php echo $isi_carr2 ?></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/images/<?php echo $gambar_carr3 ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $judul_carr3 ?></h5>
                        <p><?php echo $isi_carr3 ?></p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Angka Perhitungan -->
    <hr class="my-5 container">
    <section class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-white rounded" style="padding: 10px; max-width: auto;">
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-sm-6 col-md-3 my-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h1 class="fw-bold" style="text-align: right;">177</h1>
                                </div>
                                <div class="col-6 border-start">
                                    <p class="card-text" style="text-align: left;">Siswa<br>Laki-Laki</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 my-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h1 class="fw-bold" style="text-align: right;">177</h1>
                                </div>
                                <div class="col-6 border-start">
                                    <p class="card-text" style="text-align: left;">Siswa<br>Perempuan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 my-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h1 class="fw-bold" style="text-align: right;">177</h1>
                                </div>
                                <div class="col-6 border-start">
                                    <p class="card-text" style="text-align: left;">Staff<br>Pengajar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 my-2">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <h1 class="fw-bold" style="text-align: right;">177</h1>
                                </div>
                                <div class="col-6 border-start">
                                    <p class="card-text" style="text-align: left;">Ruang<br>Kelas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Angka Perhitungan -->

    <!-- Main Content -->
    <main>
        <hr class="container my-5">
        <!-- Sambutan kepala sekolah & Fitur tambahan -->
        <section>
            <div class="container text-black">
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        $sql2   = "SELECT * FROM sambutan";
                        $q2     = mysqli_query($koneksi, $sql2);
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_sambutan    = $r2['id_sambutan'];
                            $nama_penyambut = $r2['nama'];
                            $status         = $r2['status'];
                            $isi_sambutan   = $r2['isi_sambutan'];
                            $tanggal_sambut = $r2['tanggal'];
                        }
                        ?>
                        <div class="card" style="padding: 10px; max-width: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="assets/images/ibu-Andjar.png" class="img-fluid rounded" alt="..." style="width: 700px;">
                                </div>
                                <div class="col-sm-8" style="padding: 30px">
                                    <h4 class="card-title fw-bold">Sambutan Kepala Sekolah</h4>
                                    <blockquote class="blockquote">
                                        <p class="card-text blockquote" style="text-align: justify"><?php echo $isi_sambutan ?></p>
                                        <footer class="card-text"><small class="text-muted blockquote-footer"><?php echo $nama_penyambut ?></small></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="max-width: auto;">
                            <div class="card-header" style="text-align: justify;">
                                Featured
                            </div>
                            <div class="card-body">
                                <iframe width="225" height="auto" src="https://www.youtube.com/embed/qM-1T9zeQpY" title="#PANDEMI COVID-19# UJIAN SEKOLAH #BERBASIS ANDROID" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="container my-5">

        <hr class="container my-5">
        <!-- Menu Informasi & Pengumuman -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p class="fs-5 fw-lighter" style="text-align: center;">Menu</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="fs-1 fw-bold" style="text-align: center;">Informasi</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="row">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="card my-3" style="width: 500px; height: max-content;" href="berita-detail.php">
                                    <a href="berita-detail.php">
                                        <img src="https://picsum.photos/id/200/300" class="card-img-top mw-100" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <span class="fs-6 fw-lighter text-secondary">Oleh: Anshari | 12 Jul 2022 22:33:41</span>
                                        <a href="berita-detail.php" style="text-decoration: none; color: black;">
                                            <h5 class="card-title mt-2">Card title</h5>
                                        </a>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="card my-3" style="width: 500px; height: max-content;" href="berita-detail.php">
                                    <a href="berita-detail.php">
                                        <img src="https://picsum.photos/id/200/300" class="card-img-top mw-100" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <span class="fs-6 fw-lighter text-secondary">Oleh: Anshari | 12 Jul 2022 22:33:41</span>
                                        <a href="berita-detail.php" style="text-decoration: none; color: black;">
                                            <h5 class="card-title mt-2">Card title</h5>
                                        </a>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="card my-3" style="width: 500px; height: max-content;" href="berita-detail.php">
                                    <a href="berita-detail.php">
                                        <img src="https://picsum.photos/id/200/300" class="card-img-top mw-100" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <span class="fs-6 fw-lighter text-secondary">Oleh: Anshari | 12 Jul 2022 22:33:41</span>
                                        <a href="berita-detail.php" style="text-decoration: none; color: black;">
                                            <h5 class="card-title mt-2">Card title</h5>
                                        </a>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="card my-3" style="width: 500px; height: max-content;" href="berita-detail.php">
                                    <a href="berita-detail.php">
                                        <img src="https://picsum.photos/id/200/300" class="card-img-top mw-100" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <span class="fs-6 fw-lighter text-secondary">Oleh: Anshari | 12 Jul 2022 22:33:41</span>
                                        <a href="berita-detail.php" style="text-decoration: none; color: black;">
                                            <h5 class="card-title mt-2">Card title</h5>
                                        </a>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Konten Berita -->
                    <div class="col-sm-12 col-md-3">
                        <h1 class="fs-5 fw-semibold" style="text-align: left;">Pengumuman</h1>
                        <div class="row">
                            <div class="col-sm-4">
                                <hr class="my-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <main class="container">
        <!-- <hr class="my-5">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                Featured
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                    </div>

                    <div id="ibu" class="col-md-10">
                        <div class="card" style="max-width: 4000px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/ibu-Andjar.png" class="img-fluid rounded-start" alt="..." height="100">
                                </div>
                                <div class="col-md-8 text-dark">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold my-3 mx-5">Sambutan Kepala Sekolah</h4>
                                        <blockquote class="blockquote">
                                            <p class="card-text mx-5 blockquote"><?php echo $isi_sambutan ?></p>
                                            <footer class="card-text mx-5"><small class="text-muted blockquote-footer"><?php echo $nama_penyambut ?></small></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- CardBox Sambutan Kepala Sekolah -->

        <!-- Visi & Misi -->
        <!-- <hr class="my-5">
        <hr class="my-5">
        <section id="visi" class="content">
            <div id="visi">
                <h1 class="fw-bold">Visi :</h1>
                <p>Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri</p>
            </div>

            <div id="misi">
                <h1 class="fw-bold">Misi :</h1>
                <p class="justify-content">Untuk mencapai visi sebagai sekolah yang terdepan, terbaik, dan terpercaya, perlu dilakukan suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi Sekolah Dasar Negeri 1 Purwokerto Kulon yang dirumuskan berdasarkan visi sekolah, yaitu:</p>
                <?php
                $sql3   = "SELECT * FROM misi";
                $q3     = mysqli_query($koneksi, $sql3);
                $index3  = 1;
                while ($r3 = mysqli_fetch_array($q3)) {
                    $id_misi    = $r3['id_misi'];
                    $isi_misi   = $r3['isi_Misi'];
                ?>
                    <tr>
                        <th><?php echo $index3++ ?>. </th>
                        <td><?php echo $isi_misi ?><br></td>
                    </tr>
                <?php
                }
                ?>
            </div>
        </section> -->
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