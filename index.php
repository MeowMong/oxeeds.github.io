<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<?php
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

?>

<!-- Hero Section -->
<section id="hero" class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/images/slideshow/<?= $gambar_carr1 ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>SELAMAT DATANG DI<br />
                        <span class="fw-bold">SDN 1 PURWOKERTO KULON</span>
                    </h1>
                    <p><?= $isi_carr1 ?></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/images/slideshow/<?= $gambar_carr2 ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $judul_carr2 ?></h5>
                    <p><?= $isi_carr2 ?></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/images/slideshow/<?= $gambar_carr3 ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $judul_carr3 ?></h5>
                    <p><?= $isi_carr3 ?></p>
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
                                <h1 class="fw-bold" style="text-align: right;"><?= getSumSiswaLaki() ?></h1>
                            </div>
                            <div class="col-6 border-start">
                                <p class="card-text" style="text-align: left;">Siswa<br>Laki-Laki</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 my-2">
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <h1 class="fw-bold" style="text-align: right;"><?= getSumSiswaPr() ?></h1>
                            </div>
                            <div class="col-6 border-start">
                                <p class="card-text" style="text-align: left;">Siswa<br>Perempuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 my-2">
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <h1 class="fw-bold" style="text-align: right;"><?= getCountGuru() ?></h1>
                            </div>
                            <div class="col-6 border-start">
                                <p class="card-text" style="text-align: left;">Staff<br>Pengajar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 my-2">
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <h1 class="fw-bold" style="text-align: right;"><?= getCountKelas() ?></h1>
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
                <!-- Kata Sambutan -->
                <div class="col-sm-9">
                    <?php
                    $query   = query("SELECT * FROM sambutan");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="card" style="padding: 10px; max-width: auto;">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="assets/images/sambutan/<?= $row['gambar_sambutan'] ?>" class="img-fluid rounded" alt="..." style="width: 700px;">
                                </div>
                                <div class="col-sm-8" style="padding: 30px">
                                    <h4 class="card-title fw-bold">Sambutan Kepala Sekolah</h4>
                                    <blockquote class="blockquote">
                                        <p class="card-text blockquote" style="text-align: justify"><?= $row['isi_sambutan'] ?></p>
                                        <footer class="card-text"><small class="text-muted blockquote-footer"><?= $row['name_sambutan'] ?></small></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                </div>
            <?php } ?>
            <!-- END Kata Sambutan -->

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
                    <p id="berita" class="fs-1 fw-bold" style="text-align: center;">Informasi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div class="row">
                        <?php
                        // MEMBUAT PAGINATION
                        $per_page = 4;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = '';
                        }

                        if ($page == '' || $page == 1) {
                            $page_1 = 0;
                        } else {
                            $page_1 = ($page * $per_page) - $per_page;
                        }

                        $berita_count_query = query("SELECT * FROM berita");
                        // $result = mysqli_fetch_array($query);
                        $count = mysqli_num_rows($berita_count_query);

                        if ($count < 1) {
                            echo '<h1>NO POST DATA</h1>';
                        } else {
                            $count = ceil($count / $per_page);

                            $query = query("SELECT * FROM berita ORDER BY berita.berita_date DESC
                                            LIMIT $page_1, $per_page");
                            if (mysqli_num_rows($query) > 0) {
                                while ($row = mysqli_fetch_array($query)) {
                                    $berita_title = $row['berita_title'];
                                    $berita_description = $row['berita_description'];
                                    $berita_date = $row['berita_date'];
                                    $id_berita = $row['id_berita'];
                                    $berita_image = $row['berita_image'];
                                    $berita_author = $row['berita_author'];

                                    // Jika gambar ada, maka tampilkan, jika tidak maka ambil gambar melalui link
                                    if ($berita_image) {
                                        $dir = "assets/images/berita/" . $berita_image;
                                    } else {
                                        $dir = "https://via.placeholder.com/500x300";
                                    }
                        ?>
                                    <!-- Informasi/Berita -->
                                    <div class="col-sm-6 d-flex justify-content-between">
                                        <div class="card my-3 border-0 shadow-lg" style="width: 500px; height: max-content;" href="berita_detail.php">
                                            <a href="berita_detail.php">
                                                <img src="<?= $dir ?>" class="card-img-top mw-100" alt="<?= $dir ?>">
                                            </a>
                                            <div class="card-body">
                                                <span class="fs-6 fw-lighter text-secondary">Oleh: <?= $berita_author ?> | <?= $berita_date ?></span>
                                                <a href="berita_detail.php" style="text-decoration: none; color: black;">
                                                    <h5 class="card-title mt-2"><?= $berita_title ?></h5>
                                                </a>
                                                <p class="card-text"><?= substr($berita_description, 0, 100) ?>
                                                    <a href="berita_detail.php?id_berita=<?= $id_berita ?>"> Read More</a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- END Informasi/Berita -->
                                    </div>
                        <?php }
                            } else {
                                echo '<div class="alert alert-danger" role="alert">
                                    Belum ada Data
                                </div>';
                            }
                        } ?>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
                            for ($i = 1; $i <= $count; $i++) {
                                if ($i == $page) {
                                    echo "<li class='page-item active'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                                } else {
                                    echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                    <!-- END Pagination -->
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

<?php include 'includes/footer.php' ?>