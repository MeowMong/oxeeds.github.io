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

// Kontak
$id_pesan       = "";
$nama           = "";
$kontak         = "";
$isi_pesan      = "";

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
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
    <style>
        .justify {
            text-align: justify;
        }

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
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" href="kontak.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="container h-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <?php
            $sql1   = "SELECT * FROM carousel";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
                $id_carr        = $r1['id_carr'];
                $gambar_carr    = $r1['gambar_carr'];
                $judul_carr     = $r1['judul_carr'];
                $isi_carr       = $r1['isi_carr'];
            }
            ?>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/<?php echo $gambar_carr ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>SELAMAT DATANG DI <br />
                            <span class="fw-bold">SDN 1 PURWOKERTO KULON</span>
                        </h1>
                        <p><?php echo $isi_carr ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/<?php echo $gambar_carr ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $judul_carr ?></h5>
                        <p><?php echo $isi_carr ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/<?php echo $gambar_carr ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $judul_carr ?></h5>
                        <p><?php echo $isi_carr ?></p>
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

    <!-- Default box -->
    <main class="container">
        <hr class="my-5">
        <hr class="my-5">
        <div class="card text-black">
            <?php
            // CREATE
            if (isset($_POST['simpan_data'])) {
                $nama           = $_POST['nama'];
                $kontak         = $_POST['kontak'];
                $isi_pesan      = $_POST['isi_pesan'];

                if ($nama || $kontak || $isi_pesan) {
                    // Simpan data
                    $sql1   = "INSERT INTO berita(judul_berita, isi, pengarang, img) VALUES ('$judul_berita', '$isi', '$pengarang', '$img')";
                    $q1     = mysqli_query($koneksi, $sql1);
                }
            }
            ?>
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2>SDN 1 <br><strong>Purwokerto Kulon</strong></h2>
                        <p class="lead mb-5">Jln. DI Panjaitan Gang Karangbaru III No.50 Kecamatan Purwokerto Selatan Kabupan Banyumas
                        </p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-group">
                        <label for="nama">Nama Anda</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kontak">E-Mail / Nomor Telepon</label>
                        <input type="text" class="form-control" id="kontak" name="kontak">
                    </div>
                    <div class="form-group">
                        <label for="isi_pesan">Pesan</label>
                        <textarea class="form-control" rows="2" id="isi_pesan" name="isi_pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan_data" class="btn btn-primary">Kirim pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="main-footer marginme container justify-content-end">
        <strong>Copyright &copy; 2014-2022 SDN 1 Purwokerto Kulon.</strong> All rights reserved.
    </footer>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>