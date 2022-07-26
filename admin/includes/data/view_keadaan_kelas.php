<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_keadaan_kelas'])) {
    $nama_ruang_kelas = escape($_POST['nama_ruang_kelas']);
    $panjang_kelas = escape($_POST['panjang_kelas']);
    $lebar_kelas = escape($_POST['lebar_kelas']);
    $satuan_kelas = escape($_POST['satuan_kelas']);
    $keadaan_kelas = escape($_POST['keadaan_kelas']);

    if ($nama_ruang_kelas && $panjang_kelas && $lebar_kelas && $keadaan_kelas) {
        // Simpan data
        $query   = query("INSERT INTO keadaan_kelas(nama_ruang_kelas, panjang_kelas, lebar_kelas, satuan_kelas, keadaan_kelas) 
                                VALUES ('$nama_ruang_kelas', '$panjang_kelas', '$lebar_kelas', '$satuan_kelas', '$keadaan_kelas') ");
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Data KOSONG! Silahkan masukkan data!";
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id_keadaan_kelas = $_GET['delete'];
    if ($id_keadaan_kelas) {
        $query = query("DELETE FROM keadaan_kelas WHERE id_keadaan_kelas = '$id_keadaan_kelas'");
        confirmQuery($query);
        if ($query) {
            $sukses     = "Menghapus data BERHASIL!";
        } else {
            $error      = "GAGAL menghapus data!";
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Keadaan Kelas</h1>
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
                <!-- Alert Gagal -->
                <?php
                if ($error) {
                ?>
                    <div class="card-tools alert alert-danger opacity-50" role="alert">
                        <a href="keadaan_kelas.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="keadaan_kelas.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>

                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary border-0 shadow-lg">
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama_ruang_kelas">Nama Ruang</label>
                                <input type="text" class="form-control" id="nama_ruang_kelas" name="nama_ruang_kelas" placeholder="Masukkan Nama Ruang" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="panjang_kelas">Panjang (m)</label>
                                <input type="number" step="0.01" class="form-control" id="panjang_kelas" name="panjang_kelas" placeholder="Masukkan Panjang Ruang">
                            </div>

                            <div class="form-group">
                                <label for="lebar_kelas">Lebar (m)</label>
                                <input type="number" step="0.01" class="form-control" id="lebar_kelas" name="lebar_kelas" placeholder="Masukkan Lebar Ruang">
                            </div>

                            <div class="form-group">
                                <label for="satuan_kelas">Satuan</label>
                                <input type="text" class="form-control" id="satuan_kelas" name="satuan_kelas" placeholder="Masukkan Satuan Ruang">
                            </div>
                            <div class="form-group">
                                <label for="keadaan_kelas">Keadaan</label>
                                <input type="text" class="form-control" id="keadaan_kelas" name="keadaan_kelas" placeholder="Masukkan Keadaan Ruang">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_keadaan_kelas" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title">
                            List Keadaan Kelas
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Ruang</th>
                                    <th>Panjang (m)</th>
                                    <th>lebar (m)</th>
                                    <th>Satuan</th>
                                    <th>Keadaan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM keadaan_kelas");
                                $index  = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $index++ ?></th>
                                        <td><?= $row['nama_ruang_kelas'] ?></td>
                                        <td><?= $row['panjang_kelas'] ?></td>
                                        <td><?= $row['lebar_kelas'] ?></td>
                                        <td><?= $row['satuan_kelas'] ?></td>
                                        <td><?= $row['keadaan_kelas'] ?></td>
                                        <td><?= $row['keterangan_kelas'] ?></td>
                                        <td>
                                            <a href="keadaan_kelas.php?page=edit&id_keadaan_kelas=<?= $row['id_keadaan_kelas'] ?>" class="btn btn-warning mt-1">Update</a>
                                            <a href="keadaan_kelas.php?delete=<?= $row['id_keadaan_kelas'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">Hapus</a>
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