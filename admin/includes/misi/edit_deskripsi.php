<?php
$id_deskripsi_misi = $_GET['id_deskripsi_misi'];
if (isset($_GET['id_deskripsi_misi'])) {
    $query = query("SELECT * FROM deskripsi_misi WHERE id_deskripsi_misi='$id_deskripsi_misi' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_deskripsi_misi'])) {
        $isi_deskripsi_misi = escape($_POST['isi_deskripsi_misi']);

        $query = query("UPDATE deskripsi_misi SET isi_deskripsi_misi='$isi_deskripsi_misi' WHERE id_deskripsi_misi='$id_deskripsi_misi' ");
        if ($query) {
            redirect('misi.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Deskripsi Misi</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="isi_deskripsi_misi">Deskripsi Misi</label>
                                <textarea class="form-control" rows="3" id="isi_deskripsi_misi" name="isi_deskripsi_misi"><?= $result['isi_deskripsi_misi'] ?></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update_deskripsi_misi" class="btn btn-warning btn-block">Update Deskripsi Misi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>