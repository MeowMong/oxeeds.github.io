<?php
$id_fasilitas = $_GET['id_fasilitas'];
if (isset($_GET['id_fasilitas'])) {
    $query = query("SELECT * FROM fasilitas WHERE id_fasilitas='$id_fasilitas' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);
    $gambar_fasilitas = $result['gambar_fasilitas'];

    // Query Edit ke Database
    if (isset($_POST['update_fasilitas'])) {
        $nama_fasilitas = escape($_POST['nama_fasilitas']);
        $tahun_masuk_fasilitas = escape($_POST['tahun_masuk_fasilitas']);
        $keterangan_fasilitas = escape($_POST['keterangan_fasilitas']);

        $gambar_fasilitas = $_FILES['gambar_fasilitas']['name'];
        $gambar_fasilitas_tmp = $_FILES['gambar_fasilitas']['tmp_name'];

        move_uploaded_file($gambar_fasilitas_tmp, "../assets/images/fasilitas/$gambar_fasilitas");

        // Jika gambar nya kosong
        if (empty($gambar_fasilitas)) {
            $query = query("SELECT * FROM fasilitas WHERE id_fasilitas='$id_fasilitas'");
            confirmQuery($query);
            $result = mysqli_fetch_assoc($query);
            $gambar_fasilitas = $result['gambar_fasilitas'];
        }

        $query = query("UPDATE fasilitas SET nama_fasilitas='$nama_fasilitas', 
                                            tahun_masuk_fasilitas='$tahun_masuk_fasilitas', 
                                            gambar_fasilitas='$gambar_fasilitas', 
                                            keterangan_fasilitas='$keterangan_fasilitas' 
                                            WHERE id_fasilitas='$id_fasilitas' ");
        if ($query) {
            redirect('fasilitas.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Fasilitas</strong></h1>
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
                <!-- Edit Data Fasilitas  -->
                <div class="card card-primary border-0 shadow-lg mb-5">
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- No telp-->
                            <div class="form-group">
                                <label>Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas" value="<?= $result['nama_fasilitas'] ?>">
                            </div>
                            <!-- No telp-->
                            <div class="form-group">
                                <label>Tahun Masuk</label>
                                <input type="date" class="form-control" name="tahun_masuk_fasilitas" value="<?= $result['tahun_masuk_fasilitas'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" name="gambar_fasilitas" value="<?= $result['gambar_fasilitas'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan_fasilitas" value="<?= $result['keterangan_fasilitas'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="update_fasilitas" class="btn btn-warning">Update Data</button>
                            <a href="fasilitas.php" class="btn btn-secondary">Kembali</a>
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