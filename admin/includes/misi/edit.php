<?php
$id_misi = $_GET['id_misi'];
if (isset($_GET['id_misi'])) {
    $query = query("SELECT * FROM misi WHERE id_misi='$id_misi' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_misi'])) {
        $isi_misi = escape($_POST['isi_misi']);

        $query = query("UPDATE misi SET isi_misi='$isi_misi' WHERE id_misi='$id_misi' ");
        if ($query) {
            redirect('misi.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Misi</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="isi_misi">Poin Misi</label>
                                <input type="text" class="form-control" id="isi_misi" name="isi_misi" value="<?= $result['isi_misi'] ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="update_misi" class="btn btn-warning">Update Data</button>
                            <a href="misi.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>