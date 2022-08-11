<?php
$id_deskripsi_tujuan = $_GET['id_deskripsi_tujuan'];
if (isset($_GET['id_deskripsi_tujuan'])) {
    $query = query("SELECT * FROM deskripsi_tujuan WHERE id_deskripsi_tujuan='$id_deskripsi_tujuan' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_deskripsi_tujuan'])) {
        $isi_deskripsi_tujuan = escape($_POST['isi_deskripsi_tujuan']);

        $query = query("UPDATE deskripsi_tujuan SET isi_deskripsi_tujuan='$isi_deskripsi_tujuan' WHERE id_deskripsi_tujuan='$id_deskripsi_tujuan' ");
        if ($query) {
            redirect('tujuan.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Deskripsi Tujuan</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="isi_deskripsi_tujuan">Deskripsi Tujuan</label>
                                <textarea class="form-control" rows="3" id="isi_deskripsi_tujuan" name="isi_deskripsi_tujuan"><?= $result['isi_deskripsi_tujuan'] ?></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update_deskripsi_tujuan" class="btn btn-warning">Update Data</button>
                                <a href="tujuan.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>