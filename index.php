<?php
// Koneksi
include 'includes/db.php';

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
<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

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
<?php include 'includes/footer.php' ?>