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
    <div class="container my-5">
        <div class="nav-item justify-content-start">
            <a class="fw-bold rounded nav-link link-secondary" style="padding: 5px;" href="berita.php">Kembali</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <img src="https://picsum.photos/300/200" class="rounded mx-auto d-block w-100">
                <div class="h2 mt-3">Title here..</div>
                <span class="fs-6 fw-lighter text-secondary">Oleh: Anshari | 12 Jul 2022 22:33:41</span>
                <div class="content my-3">
                    <p><b>Lorem ipsum dolor</b>, sit amet consectetur adipisicing elit. Quod iusto non unde voluptates exercitationem ab repellat. Aperiam maiores laudantium quasi alias facilis voluptatum possimus nihil corporis, explicabo deserunt asperiores molestiae ad excepturi quisquam! Dolorum doloremque nemo voluptates delectus quibusdam!</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/footer.php' ?>