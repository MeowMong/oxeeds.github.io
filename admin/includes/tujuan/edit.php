<?php
$id_tujuan = $_GET['id_tujuan'];
if (isset($_GET['id_tujuan'])) {
    $query = query("SELECT * FROM tujuan WHERE id_tujuan='$id_tujuan' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update'])) {
        $judul_carr = escape($_POST['judul_carr']);
        $isi_tujuan = escape($_POST['isi_tujuan']);

        $query = query("UPDATE tujuan SET isi_tujuan='$isi_tujuan' WHERE id_tujuan='$id_tujuan' ");
        if ($query) {
            redirect('tujuan.php');
        }
    }
}
?>

<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Tujuan</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Isi Tujuan</label>
                            <input type="text" name="isi_tujuan" class="form-control" value="<?= $result['isi_tujuan'] ?>">
                        </div>
                        <div class="form-group card-footer">
                            <button type="submit" name="update" class="btn btn-warning btn-block">Update Tujuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>