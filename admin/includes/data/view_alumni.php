<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_alumni'])) {
    $tahun_pelajaran = escape($_POST['tahun_pelajaran']);
    $jumlah_lulusan = escape($_POST['jumlah_lulusan']);
    $jumlah_lanjut = escape($_POST['jumlah_lanjut']);


    if ($tahun_pelajaran || $jumlah_lulusan || $jumlah_lanjut) {
        // Simpan data
        $query = query("INSERT INTO alumni(tahun_pelajaran, jumlah_lulusan, jumlah_lanjut) 
                                VALUES ('$tahun_pelajaran', '$jumlah_lulusan', '$jumlah_lanjut') ");
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
    $id_alumni = $_GET['delete'];
    if ($id_alumni) {
        $query = query("DELETE FROM alumni WHERE id_alumni = '$id_alumni'");
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
                <h1 class="text-center"><strong>Data Alumni</strong></h1>
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
                        <a href="alumni.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="alumni.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
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
                                <label for="tahun_pelajaran">Tahun Pelajaran</label>
                                <input type="text" class="form-control" id="tahun_pelajaran" name="tahun_pelajaran" placeholder="Masukkan Tahun Ajaran" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_lulusan">Jumlah Lulusan</label>
                                <input type="number" class="form-control" id="jumlah_lulusan" name="jumlah_lulusan" placeholder="Masukkan Jumlah Lulusan">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_lanjut">Jumlah Siswa Lanjut Sekolah</label>
                                <input type="number" class="form-control" id="jumlah_lanjut" name="jumlah_lanjut" placeholder="Masukkan Jumlah Siswa Lanjut Sekolah">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_alumni" class="btn btn-primary btn-block">Tambah Data Alumni</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <strong>List Data Alumni</strong>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Tahun Pelajaran</th>
                                    <th>Jumlah Lulusan</th>
                                    <th>Jumlah Lanjut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM alumni");
                                $index  = 1;
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $index++ ?></th>
                                        <td><?= $row['tahun_pelajaran'] ?></td>
                                        <td><?= $row['jumlah_lulusan'] ?></td>
                                        <td><?= $row['jumlah_lanjut'] ?></td>
                                        <td>
                                            <a href="alumni.php?page=edit&id_alumni=<?= $row['id_alumni'] ?>" class="btn btn-warning mt-1">Update</a>
                                            <a href="alumni.php?delete=<?= $row['id_alumni'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">Hapus</a>
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