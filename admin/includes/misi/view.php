<?php
$sukses = "";
$error = "";

if (isset($_POST['simpan_misi'])) {
    $isi_misi = escape($_POST['isi_misi']);

    if ($isi_misi) {

        $query   = query("INSERT INTO misi(isi_misi) VALUES ('$isi_misi')");
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
    $id_misi = $_GET['delete'];
    if ($id_misi) {
        $query = query("DELETE FROM misi WHERE id_misi='$id_misi' ");
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
            <h1 class="text-center"><strong>Misi</strong></h1>
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
                            <a href="misi.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                            <a href="misi.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                            <?php echo $sukses ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="card border-0 shadow-lg">

                        <!-- Tambah Deskripsi & Isi Misi-->
                        <div class="card card-warning">
                            <!-- form start -->
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="isi_misi">Tambah Poin Misi</label>
                                        <input type="text" class="form-control" id="isi_misi" name="isi_misi" placeholder="Masukkan Poin Misi">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan_misi" class="btn btn-primary btn-block">Tambah Misi</button>
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
                            <h3><strong>Tabel Misi</strong></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover mb-5">
                                <thead>
                                    <tr>
                                        <th class="text-center">Deskripsi Misi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM deskripsi_misi WHERE id_deskripsi_misi='1' ");
                                    confirmQuery($query);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $row['isi_deskripsi_misi'] ?></td>
                                            <td class="text-center">
                                                <a href="misi.php?page=edit_deskripsi&id_deskripsi_misi=<?= $row['id_deskripsi_misi'] ?>" class="btn btn-warning">Update</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Poin Misi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM misi");
                                    confirmQuery($query);
                                    $index = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $index++ ?></td>
                                            <td><?= $row['isi_misi'] ?></td>
                                            <td class="text-center">
                                                <a href="misi.php?page=edit&id_misi=<?= $row['id_misi'] ?>" class="btn btn-warning mt-1">Update</a>
                                                <a href="misi.php?delete=<?= $row['id_misi'] ?>" class="btn btn-danger mt-1" onclick="return confirm('Ingin Menghapus Data ?')">Delete</a>
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