<?php
$sukses = "";
$error = "";

if (isset($_POST['simpan_galeri'])) {
    $judul_galeri = escape($_POST['judul_galeri']);
    $deskripsi_galeri = escape($_POST['deskripsi_galeri']);
    $tanggal_galeri = escape($_POST['tanggal_galeri']);

    $gambar_galeri = $_FILES['gambar_galeri']['name'];
    $gambar_galeri_tmp = $_FILES['gambar_galeri']['tmp_name'];

    move_uploaded_file($gambar_galeri_tmp, "../assets/images/galeri/$gambar_galeri");

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
                                            <td class="text-center"><img src="../assets/images/galeri/<?= $row['gambar_galeri'] ?>" alt="<?= $row['gambar_galeri'] ?>" width="300"></td>
                                            <td><?= $row['judul_galeri'] ?></td>
                                            <td><?= $row['deskripsi_galeri'] ?></td>
                                            <td class="text-center"><?= $row['tanggal_galeri'] ?></td>
                                            <td class="text-center">
                                                <a href="galeri.php?page=edit&id_galeri=<?= $row['id_galeri'] ?>" class="btn btn-warning mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                                <a href="galeri.php?delete=<?= $row['id_galeri'] ?>" class="btn btn-danger mt-1" onclick="return confirm('Ingin Menghapus Data ?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </a>
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