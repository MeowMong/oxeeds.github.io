<?php

$sukses = "";
$error = "";

if (isset($_POST['simpan_tujuan'])) {
    $isi_tujuan = escape($_POST['isi_tujuan']);

    if ($isi_tujuan) {

        $query   = query("INSERT INTO tujuan(isi_tujuan) VALUES ('$isi_tujuan')");
        if ($query) {
            $sukses     = "Menambahkan data baru (Misi) BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Isi Visi KOSONG! Silahkan masukkan data!";
    }
}

if (isset($_GET['delete'])) {
    $id_tujuan = $_GET['delete'];
    if ($id_tujuan) {
        $query = query("DELETE FROM tujuan WHERE id_tujuan='$id_tujuan' ");
        confirmQuery($query);
        if ($query) {
            $sukses = "BERHASIL Menghapus Data!";
        }
    }
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Tujuan Sekolah</h1>
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
                            <?= $error ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Alert Sukses -->
                    <?php
                    if ($sukses) {
                    ?>
                        <div class="alert alert-success opacity-50" role="alert">
                            <?= $sukses ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Edit Tujuan -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="isi_tujuan">Isi Tujuan Sekolah</label>
                                    <input type="text" class="form-control" id="isi_tujuan" name="isi_tujuan" placeholder="Masukkan isi Tujuan"">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="simpan_tujuan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /card -->

                    <!-- List Tujuan Sekolah -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                List tujuan Sekolah
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <!-- Baris 1 (Jenis Kolom) -->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tujuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <!-- Isi -->
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM tujuan");
                                    $index  = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        $id_tujuan  = $row['id_tujuan'];
                                        $isi_tujuan     = $row['isi_tujuan'];
                                    ?>
                                        <tr>
                                            <th><?= $index++ ?></th>
                                            <td><?= $isi_tujuan ?></td>
                                            <td>
                                                <a href="tujuan.php?page=edit&id_tujuan=<?php echo $id_tujuan ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                <a href="tujuan.php?delete=<?php echo $id_tujuan ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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
</div>
<!-- /.content-wrapper -->