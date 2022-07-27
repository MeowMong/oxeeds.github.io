<?php
$sukses = "";
$error = "";

if (isset($_POST['simpan_galeri'])) {
    $judul_galeri = escape($_POST['judul_galeri']);
    $deskripsi_galeri = escape($_POST['deskripsi_galeri']);
    $tanggal_galeri = escape($_POST['tanggal_galeri']);

    $gambar_galeri = $_FILES['gambar_galeri']['name'];
    $gambar_galeri_tmp = $_FILES['gambar_galeri']['tmp_name'];

    move_uploaded_file($gambar_galeri_tmp, "../img/galeri/$gambar_galeri");

    if ($gambar_galeri || $judul_galeri || $deskripsi_galeri || $tanggal_galeri) {
        $query   = query("INSERT INTO galeri(gambar_galeri, judul_galeri, deskripsi_galeri, tanggal_galeri) 
                        VALUES ('$gambar_galeri','$judul_galeri','$deskripsi_galeri','$tanggal_galeri') ");
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Data KOSONG! Silahkan masukkan data!";
    }
}

if (isset($_GET['delete'])) {
    $id_galeri = $_GET['delete'];
    if ($id_galeri) {
        $query = query("DELETE FROM galeri WHERE id_galeri='$id_galeri' ");
        confirmQuery($query);
        if ($query) {
            $sukses = "BERHASIL Menghapus Data!";
        }
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Galeri</strong></h1>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Alert Gagal -->
                    <?php
                    if ($error) {
                    ?>
                        <div class="alert alert-danger opacity-50" role="alert">
                            <a href="galeri.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
                            <?php echo $error ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Alert Sukses -->
                    <?php
                    if ($sukses) {
                    ?>
                        <div class="alert alert-success opacity-50" role="alert">
                            <a href="galeri.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                            <?php echo $sukses ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="card border-0 shadow-lg">

                        <!-- Tambah Deskripsi & Isi Misi-->
                        <div class="card card-warning">
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="gambar_galeri">Gambar Galeri</label>
                                        <input type="file" class="form-control" id="gambar_galeri" name="gambar_galeri">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_galeri">Judul Gambar</label>
                                        <input type="text" class="form-control" id="judul_galeri" name="judul_galeri" placeholder="Masukkan Judul Gambar">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_galeri">Deskripsi Gambar</label>
                                        <input type="text" class="form-control" id="deskripsi_galeri" name="deskripsi_galeri" placeholder="Masukkan Deskripsi Gambar">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_galeri">Tanggal Galeri</label>
                                        <input type="date" class="form-control" id="tanggal_galeri" name="tanggal_galeri">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan_galeri" class="btn btn-primary btn-block">Tambah Galeri</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card bordered-0 shadow-lg">
                        <div class="card-header text-center">
                            <h3><strong>Tabel Data Galeri</strong></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Gambar Galeri</th>
                                        <th>Judul Galeri</th>
                                        <th>Deskripsi Galeri</th>
                                        <th>Tanggal Galeri</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM galeri");
                                    confirmQuery($query);
                                    $index = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $index++ ?></td>
                                            <td class="text-center"><img src="../img/galeri/<?= $row['gambar_galeri'] ?>" alt="<?= $row['gambar_galeri'] ?>" width="300"></td>
                                            <td><?= $row['judul_galeri'] ?></td>
                                            <td><?= $row['deskripsi_galeri'] ?></td>
                                            <td class="text-center"><?= $row['tanggal_galeri'] ?></td>
                                            <td class="text-center">
                                                <a href="galeri.php?page=edit&id_galeri=<?= $row['id_galeri'] ?>" class="btn btn-warning mt-1">Update</a>
                                                <a href="galeri.php?delete=<?= $row['id_galeri'] ?>" class="btn btn-danger mt-1" onclick="return confirm('Ingin Menghapus Data ?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->