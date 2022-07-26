<?php
$id_galeri = $_GET['id_galeri'];
if (isset($_GET['id_galeri'])) {
    $query = query("SELECT * FROM galeri WHERE id_galeri='$id_galeri' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_galeri'])) {
        $judul_galeri = escape($_POST['judul_galeri']);
        $deskripsi_galeri = escape($_POST['deskripsi_galeri']);
        $tanggal_galeri = escape($_POST['tanggal_galeri']);

        $gambar_galeri = $_FILES['gambar_galeri']['name'];
        $gambar_galeri_tmp = $_FILES['gambar_galeri']['tmp_name'];

        move_uploaded_file($gambar_galeri_tmp, "../img/galeri/$gambar_galeri");

        // Jika gambar nya kosong
        if (empty($gambar_galeri)) {
            $query = query("SELECT * FROM galeri WHERE id_galeri='$id_galeri'");
            confirmQuery($query);
            $result = mysqli_fetch_assoc($query);
            $gambar_galeri = $result['gambar_galeri'];
        }

        // Query Edit
        $query = query("UPDATE galeri SET gambar_galeri='$gambar_galeri', 
                                            judul_galeri='$judul_galeri',
                                            deskripsi_galeri='$deskripsi_galeri',
                                            tanggal_galeri='$tanggal_galeri'
                                            WHERE id_galeri='$id_galeri' ");
        if ($query) {
            redirect('galeri.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Galeri</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gambar_galeri">Gambar Galeri</label>
                                <input type="file" class="form-control" id="gambar_galeri" name="gambar_galeri">
                            </div>
                            <div class="form-group">
                                <label for="judul_galeri">Judul Gambar</label>
                                <input type="text" class="form-control" id="judul_galeri" name="judul_galeri" value="<?= $result['judul_galeri'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_galeri">Deskripsi Gambar</label>
                                <input type="text" class="form-control" id="deskripsi_galeri" name="deskripsi_galeri" value="<?= $result['deskripsi_galeri'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_galeri">Tanggal Galeri</label>
                                <input type="date" class="form-control" id="tanggal_galeri" name="tanggal_galeri" value="<?= $result['tanggal_galeri'] ?>">
                            </div>
                        </div>
                        <div class=" card-footer">
                            <button type="submit" name="update_galeri" class="btn btn-warning btn-block">Update Data Galeri</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>