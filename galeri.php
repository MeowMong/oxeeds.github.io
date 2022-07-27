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

<!-- Main Content -->
<main>
    <!-- Fasilitas Sekolah -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Fasilitas Sekolah</h2>
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
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
                        <div class="card-img-overlay">
                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
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
    <!-- Akhir dari Fasilitas Sekolah -->

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
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
                        <div class="card-img-overlay">
                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
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
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
                        <div class="card-img-overlay">
                            <!-- <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="card text-bg-dark mx-2 my-2">
                        <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/id/200/300">
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
</main>
<?php include 'includes/footer.php' ?>