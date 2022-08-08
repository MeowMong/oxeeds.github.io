<?php
$id_keadaan_kelas = $_GET['id_keadaan_kelas'];
if (isset($_GET['id_keadaan_kelas'])) {
    $query = query("SELECT * FROM keadaan_kelas WHERE id_keadaan_kelas='$id_keadaan_kelas' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_keadaan_kelas'])) {
        $nama_ruang_kelas = escape($_POST['nama_ruang_kelas']);
        $panjang_kelas = escape($_POST['panjang_kelas']);
        $lebar_kelas = escape($_POST['lebar_kelas']);
        $satuan_kelas = escape($_POST['satuan_kelas']);
        $keadaan_kelas = escape($_POST['keadaan_kelas']);

        $query = query("UPDATE keadaan_kelas SET nama_ruang_kelas='$nama_ruang_kelas', 
                                                    panjang_kelas='$panjang_kelas',
                                                    lebar_kelas='$lebar_kelas',
                                                    satuan_kelas='$satuan_kelas',
                                                    keadaan_kelas='$keadaan_kelas'
                                                    WHERE id_keadaan_kelas='$id_keadaan_kelas' ");
        if ($query) {
            redirect('keadaan_kelas.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Keadaan Kelas</strong></h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Edit Guru & Karyawan  -->
                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary border-0 shadow-lg">
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama_ruang_kelas">Nama Ruang</label>
                                <input type="text" class="form-control" id="nama_ruang_kelas" name="nama_ruang_kelas" value="<?= $result['nama_ruang_kelas'] ?>" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="panjang_kelas">Panjang (m)</label>
                                <input type="number" step="any" class="form-control" id="panjang_kelas" name="panjang_kelas" value="<?= $result['panjang_kelas'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="lebar_kelas">Lebar (m)</label>
                                <input type="number" step="any" class="form-control" id="lebar_kelas" name="lebar_kelas" value="<?= $result['lebar_kelas'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="satuan_kelas">Satuan</label>
                                <input type="text" class="form-control" id="satuan_kelas" name="satuan_kelas" value="<?= $result['satuan_kelas'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="keadaan_kelas">Keadaan</label>
                                <input type="text" class="form-control" id="keadaan_kelas" name="keadaan_kelas" value="<?= $result['keadaan_kelas'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="update_keadaan_kelas" class="btn btn-warning btn-block">Update Data Keadaan Kelas</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->