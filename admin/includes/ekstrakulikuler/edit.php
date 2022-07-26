<?php
$id_ekstrakulikuler = $_GET['id_ekstrakulikuler'];
if (isset($_GET['id_ekstrakulikuler'])) {
    $query = query("SELECT * FROM ekstrakulikuler WHERE id_ekstrakulikuler='$id_ekstrakulikuler' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_ekstrakulikuler'])) {
        $nama_ekstrakulikuler = escape($_POST['nama_ekstrakulikuler']);
        $nama_pembina_ekstrakulikuler = escape($_POST['nama_pembina_ekstrakulikuler']);

        $query = query("UPDATE ekstrakulikuler SET nama_ekstrakulikuler='$nama_ekstrakulikuler', 
                                                nama_pembina_ekstrakulikuler='$nama_pembina_ekstrakulikuler' 
                                                WHERE id_ekstrakulikuler='$id_ekstrakulikuler' ");
        if ($query) {
            redirect('ekstrakulikuler.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Ekstrakulikuler</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_ekstrakulikuler">Nama Ekskul</label>
                                <input type="text" class="form-control" id="nama_ekstrakulikuler" name="nama_ekstrakulikuler" value="<?= $result['nama_ekstrakulikuler'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_pembina_ekstrakulikuler">Nama Pembina</label>
                                <input type="text" class="form-control" id="nama_pembina_ekstrakulikuler" name="nama_pembina_ekstrakulikuler" value="<?= $result['nama_pembina_ekstrakulikuler'] ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="update_ekstrakulikuler" class="btn btn-warning btn-block">Update Ekstrakulikuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>