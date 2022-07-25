<?php
    $id_sambutan = $_GET['id_sambutan'];
    if (isset($_GET['id_sambutan'])) {
        $query = query("SELECT * FROM sambutan WHERE id_sambutan='$id_sambutan' ");
        confirmQuery($query);
        $result = mysqli_fetch_array($query);

        // Query Edit ke Database
        if (isset($_POST['update_sambutan'])) {
            $name_sambutan = escape($_POST['name_sambutan']);
            $isi_sambutan = escape($_POST['isi_sambutan']);

            $query = query("UPDATE sambutan SET name_sambutan='$name_sambutan', isi_sambutan='$isi_sambutan' WHERE id_sambutan='$id_sambutan' ");
            if ($query) {
                redirect('sambutan.php');
            }
        }
    }
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Update Sambutan Kepala Sekolah</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow lg">
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name_sambutan" value="<?= $result['name_sambutan'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Isi Sambutan</label>
                            <textarea class="form-control" name="isi_sambutan" cols="30" rows="10"><?= $result['isi_sambutan'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update_sambutan" class="btn btn-warning btn-block">Update Sambutan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>