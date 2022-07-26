<?php
$sukses         = "";
$error          = "";

// CREATE
if (isset($_POST['simpan_ekstrakulikuler'])) {
    $nama_ekstrakulikuler = escape($_POST['nama_ekstrakulikuler']);
    $nama_pembina_ekstrakulikuler = escape($_POST['nama_pembina_ekstrakulikuler']);

    if ($nama_ekstrakulikuler || $nama_pembina_ekstrakulikuler) {
        // Simpan data
        $query   = query("INSERT INTO ekstrakulikuler(nama_ekstrakulikuler, nama_pembina_ekstrakulikuler) 
                        VALUES ('$nama_ekstrakulikuler', '$nama_pembina_ekstrakulikuler')");
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Silahkan masukkan data!";
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id_ekstrakulikuler = $_GET['delete'];
    $query   = query("DELETE FROM ekstrakulikuler WHERE id_ekstrakulikuler = '$id_ekstrakulikuler'");
    if ($query) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Ekstrakulikuler</strong></h1>
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
                        <div class="card-tools alert alert-danger opacity-50" role="alert">
                            <a href="ekstrakulikuler.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                            <a href="ekstrakulikuler.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                            <?php echo $sukses ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Edit Kontak  -->
                    <div class="card card-primary border-0 shadow-lg mb-5">
                        <!-- form start -->
                        <form method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_ekstrakulikuler">Nama Ekskul</label>
                                    <input type="text" class="form-control" id="nama_ekstrakulikuler" name="nama_ekstrakulikuler" placeholder="Masukkan Nama Ekstrakulikuler">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pembina_ekstrakulikuler">Nama Pembina</label>
                                    <input type="text" class="form-control" id="nama_pembina_ekstrakulikuler" name="nama_pembina_ekstrakulikuler" placeholder="Masukkan Nama Pembina Ekstrakulikuler">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="simpan_ekstrakulikuler" class="btn btn-primary btn-block">Tambah Ekstrakulikuler</button>
                            </div>
                        </form>
                    </div>
                    <!-- /card -->

                    <!-- List Kontak -->
                    <div class="card border-0 shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title text-center">
                                <strong>List Ekstrakulikuler</strong>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <!-- Baris 1 (Jenis Kolom) -->
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Ekstrakulikuler</th>
                                        <th>Nama Pembina Ekstrakulikuler</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <!-- Isi -->
                                <tbody>
                                    <?php
                                    $query   = query("SELECT * FROM ekstrakulikuler");
                                    confirmQuery($query);
                                    $index  = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th class="text-center"><?= $index++ ?></th>
                                            <td><?= $row['nama_ekstrakulikuler'] ?></td>
                                            <td><?= $row['nama_pembina_ekstrakulikuler'] ?></td>
                                            <td class="text-center">
                                                <a href="ekstrakulikuler.php?page=edit&id_ekstrakulikuler=<?= $row['id_ekstrakulikuler'] ?>"><button type="button" class="btn btn-warning mt-1">Update</button></a>
                                                <a href="ekstrakulikuler.php?delete=<?= $row['id_ekstrakulikuler'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->