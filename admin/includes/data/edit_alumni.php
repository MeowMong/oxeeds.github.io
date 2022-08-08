<?php
$id_alumni = $_GET['id_alumni'];
if (isset($_GET['id_alumni'])) {
    $query = query("SELECT * FROM alumni WHERE id_alumni='$id_alumni' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update_alumni'])) {
        $tahun_pelajaran = escape($_POST['tahun_pelajaran']);
        $jumlah_lulusan = escape($_POST['jumlah_lulusan']);
        $jumlah_lanjut = escape($_POST['jumlah_lanjut']);

        $query = query("UPDATE alumni SET tahun_pelajaran='$tahun_pelajaran', 
                                                jumlah_lulusan='$jumlah_lulusan',
                                                jumlah_lanjut='$jumlah_lanjut'
                                                WHERE id_alumni='$id_alumni' ");
        if ($query) {
            redirect('alumni.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Alumni</strong></h1>
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
                <div class="card card-primary">
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="tahun_pelajaran">Tahun Pelajaran</label>
                                <input type="text" class="form-control" id="tahun_pelajaran" name="tahun_pelajaran" value="<?= $result['tahun_pelajaran'] ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_lulusan">Jumlah Lulusan</label>
                                <input type="number" class="form-control" id="jumlah_lulusan" name="jumlah_lulusan" value="<?= $result['jumlah_lulusan'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_lanjut">Jumlah Siswa Lanjut Sekolah</label>
                                <input type="number" class="form-control" id="jumlah_lanjut" name="jumlah_lanjut" value="<?= $result['jumlah_lanjut'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="update_alumni" class="btn btn-warning btn-block">Update Data Alumni</button>
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