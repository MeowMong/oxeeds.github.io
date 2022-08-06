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
                                            <a href="siswa.php?page=edit&id_siswa=<?= $row['id_siswa'] ?>" class="btn btn-warning mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                                Edit
                                            </a>
                                            <a href="siswa.php?delete=<?= $row['id_siswa'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                                Hapus
                                            </a>
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