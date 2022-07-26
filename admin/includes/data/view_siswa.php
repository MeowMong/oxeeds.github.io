<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_siswa'])) {
    $jumlah_siswa_laki = escape($_POST['jumlah_siswa_laki']);
    $jumlah_siswa_perempuan = escape($_POST['jumlah_siswa_perempuan']);
    $tahun_ajaran_siswa = escape($_POST['tahun_ajaran_siswa']);


    if ($jumlah_siswa_laki || $jumlah_siswa_perempuan || $tahun_ajaran_siswa) {
        // Simpan data
        $query   = query("INSERT INTO siswa(jumlah_siswa_laki, jumlah_siswa_perempuan, tahun_ajaran_siswa) 
                                VALUES ('$jumlah_siswa_laki', '$jumlah_siswa_perempuan', '$tahun_ajaran_siswa') ");
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
    $id_siswa = $_GET['delete'];
    if ($id_siswa) {
        $query = query("DELETE FROM siswa WHERE id_siswa = '$id_siswa'");
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
                <h1 class="text-center"><strong>Data Siswa</strong></h1>
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
                        <a href="siswa.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="siswa.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
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
                                <label for="jumlah_siswa_laki">Siswa Laki-laki</label>
                                <input type="number" class="form-control" id="jumlah_siswa_laki" name="jumlah_siswa_laki" placeholder="Masukkan Jumlah Siswa Laki-laki" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_siswa_perempuan">Siswa Perempuan</label>
                                <input type="number" class="form-control" id="jumlah_siswa_perempuan" name="jumlah_siswa_perempuan" placeholder="Masukkan Jumlah Siswa Perempuan">
                            </div>

                            <div class="form-group">
                                <label for="tahun_ajaran_siswa">Tahun Ajaran</label>
                                <input type="text" class="form-control" id="tahun_ajaran_siswa" name="tahun_ajaran_siswa" placeholder="Masukkan Tahun Ajaran Siswa">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_siswa" class="btn btn-primary btn-block">Tambah Data Siswa</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <strong>List Data Siswa</strong>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Jumlah Siswa Laki-laki</th>
                                    <th>Jumlah Siswa Perempuan</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM siswa");
                                $index  = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $index++ ?></th>
                                        <td><?= $row['jumlah_siswa_laki'] ?></td>
                                        <td><?= $row['jumlah_siswa_perempuan'] ?></td>
                                        <td><?= $row['tahun_ajaran_siswa'] ?></td>
                                        <td>
                                            <a href="siswa.php?page=edit&id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-warning mt-1">Update</a>
                                            <a href="siswa.php?delete=<?= $row['id_siswa'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">Hapus</a>
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