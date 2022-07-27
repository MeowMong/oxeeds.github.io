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
    <div class="container">
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
                        <p class="mb-5 fs-5 fw-light">Jln. DI Panjaitan Gang Karangbaru III No.50 Kecamatan Purwokerto Selatan Kabupan Banyumas</p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-floating form-group mb-4">
                        <input for="floatingInput" type="text" class="form-control" id="nama" name="nama">
                        <label for="nama">Nama Anda</label>
                    </div>
                    <div class="form-floating form-group mb-4">
                        <input type="text" class="form-control" id="kontak" name="kontak">
                        <label for="kontak">E-Mail / Nomor Telepon</label>
                    </div>
                    <div class="form-floating form-group mb-4">
                        <textarea class="form-control" rows="2" id="isi_pesan" name="isi_pesan" style="height: 100px;"></textarea>
                        <label for="isi_pesan">Pesan</label>
                    </div>
                    <div class="form-floating form-group mb-4">
                        <button type="submit" name="simpan_data" class="btn btn-primary">Kirim pesan</button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
    </div>
</main>
<?php include 'includes/footer.php' ?>