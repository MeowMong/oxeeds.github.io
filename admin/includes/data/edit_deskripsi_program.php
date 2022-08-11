<?php
$id_deskripsi_program = $_GET['id_deskripsi_program'];
if (isset($_GET['id_deskripsi_program'])) {
    $query = query("SELECT * FROM deskripsi_program_sekolah WHERE id_deskripsi_program='$id_deskripsi_program' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_deskripsi_program_sekolah'])) {
        $deskripsi_program = escape($_POST['deskripsi_program']);

        $query = query("UPDATE deskripsi_program_sekolah SET deskripsi_program='$deskripsi_program' 
                                                WHERE id_deskripsi_program='$id_deskripsi_program' ");
        if ($query) {
            redirect('program_sekolah.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Deskripsi Program</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="deskripsi_program">Deskripsi Program</label>
                                <textarea class="form-control" rows="3" id="deskripsi_program" name="deskripsi_program"><?= $result['deskripsi_program'] ?></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update_deskripsi_program_sekolah" class="btn btn-warning">Update Data</button>
                                <a href="program_sekolah.php" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>