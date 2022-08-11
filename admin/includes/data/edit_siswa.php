<?php
$id_siswa = $_GET['id_siswa'];
if (isset($_GET['id_siswa'])) {
    $query = query("SELECT * FROM siswa WHERE id_siswa='$id_siswa' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update_siswa'])) {
        $jumlah_siswa_laki = escape($_POST['jumlah_siswa_laki']);
        $jumlah_siswa_perempuan = escape($_POST['jumlah_siswa_perempuan']);
        $tahun_ajaran_siswa = escape($_POST['tahun_ajaran_siswa']);


        $query = query("UPDATE siswa SET jumlah_siswa_laki='$jumlah_siswa_laki', 
                                                jumlah_siswa_perempuan='$jumlah_siswa_perempuan',
                                                tahun_ajaran_siswa='$tahun_ajaran_siswa'
                                                WHERE id_siswa='$id_siswa' ");
        if ($query) {
            redirect('siswa.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Siswa</strong></h1>
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
                                <label>Jumlah Siswa Laki-laki</label>
                                <input type="number" class="form-control" name="jumlah_siswa_laki" value="<?= $result['jumlah_siswa_laki'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Jumlah Siswa Perempuan</label>
                                <input type="number" class="form-control" name="jumlah_siswa_perempuan" value="<?= $result['jumlah_siswa_perempuan'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Tahun Ajaran</label>
                                <input type="text" class="form-control" name="tahun_ajaran_siswa" value="<?= $result['tahun_ajaran_siswa'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="update_siswa" class="btn btn-warning">Update Data</button>
                            <a href="siswa.php" class="btn btn-secondary">Kembali</a>
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