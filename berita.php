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

$sukses         = "";
$error          = "";

?>

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row">
            <h4 class="text-center pt-5">Berita Terbaru</h4>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
            <div class="col-md-4">
                <div class="card my-3">
                    <a href="berita-detail.php">
                        <img src="https://picsum.photos/id/200/300" class="card-img-top" alt="...">
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
</main>
<?php include 'includes/footer.php' ?>