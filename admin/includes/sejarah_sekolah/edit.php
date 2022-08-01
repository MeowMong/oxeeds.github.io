<?php
$id_sejarah_sekolah = $_GET['id_sejarah_sekolah'];
if (isset($_GET['id_sejarah_sekolah'])) {
    $query = query("SELECT * FROM sejarah_sekolah WHERE id_sejarah_sekolah='$id_sejarah_sekolah' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_deskripsi_sejarah'])) {
        $deskripsi_sejarah_sekolah = escape($_POST['deskripsi_sejarah_sekolah']);

        $gambar_sejarah_sekolah = $_FILES['gambar_sejarah_sekolah']['name'];
        $gambar_sejarah_sekolah_tmp = $_FILES['gambar_sejarah_sekolah']['tmp_name'];

        move_uploaded_file($gambar_sejarah_sekolah_tmp, "../assets/images/sejarah_sekolah/$gambar_sejarah_sekolah");

        // Jika gambar nya kosong
        if (empty($gambar_sejarah_sekolah)) {
            $query = query("SELECT * FROM sejarah_sekolah WHERE id_sejarah_sekolah='$id_sejarah_sekolah'");
            confirmQuery($query);
            $result = mysqli_fetch_assoc($query);
            $gambar_sejarah_sekolah = $result['gambar_sejarah_sekolah'];
        }

        $query = query("UPDATE sejarah_sekolah SET deskripsi_sejarah_sekolah='$deskripsi_sejarah_sekolah',
                                            gambar_sejarah_sekolah='$gambar_sejarah_sekolah'
                                            WHERE id_sejarah_sekolah='$id_sejarah_sekolah' ");
        if ($query) {
            redirect('sejarah_sekolah.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Deskripsi Sejarah</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gambar_sejarah_sekolah">Gambar</label>
                                <input type="file" class="form-control" rows="3" id="gambar_sejarah_sekolah" name="gambar_sejarah_sekolah"></input>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_sejarah_sekolah">Deskripsi Sejarah</label>
                                <textarea class="form-control" rows="3" id="deskripsi_sejarah_sekolah" name="deskripsi_sejarah_sekolah"><?= $result['deskripsi_sejarah_sekolah'] ?></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update_deskripsi_sejarah" class="btn btn-warning btn-block">Update Alinea Deskripsi Sejarah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>