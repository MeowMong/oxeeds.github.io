<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_guru_karyawan'])) {
    $nama = escape($_POST['nama']);
    $nip = escape($_POST['nip']);
    $gol_ruang = escape($_POST['gol_ruang']);
    $posisi = escape($_POST['posisi']);
    $jumlah_kelas = escape($_POST['jumlah_kelas']);
    $jam_tatap_muka = escape($_POST['jam_tatap_muka']);
    $total_jam = escape($_POST['total_jam']);
    $keterangan = escape($_POST['keterangan']);

    if ($nama && $nip) {
        // Simpan data
        $query   = query("INSERT INTO guru_karyawan(nama, nip, gol_ruang, posisi, jumlah_kelas, jam_tatap_muka, total_jam, keterangan) 
                                VALUES ('$nama', '$nip', '$gol_ruang', '$posisi', '$jumlah_kelas', '$jam_tatap_muka', '$total_jam', '$keterangan')");
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Isi Visi KOSONG! Silahkan masukkan data!";
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id_guru_karyawan = $_GET['delete'];
    if ($id_guru_karyawan) {
        $query = query("DELETE FROM guru_karyawan WHERE id_guru_karyawan = '$id_guru_karyawan'");
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
                <h1 class="text-center"> <strong>Data Guru dan Karyawan</strong></h1>
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
                        <a href="guru_karyawan.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="guru_karyawan.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
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
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="nip">Nip</label>
                                <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan Nip">
                            </div>

                            <div class="form-group">
                                <label for="gol_ruang">Gol Ruang</label>
                                <input type="text" class="form-control" id="gol_ruang" name="gol_ruang" placeholder="Masukkan Golongan Ruang">
                            </div>

                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Masukkan Posisi">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kelas">Jumlah Kelas</label>
                                <input type="text" class="form-control" id="jumlah_kelas" name="jumlah_kelas" placeholder="Masukkan Jumlah Kelas">
                            </div>
                            <div class="form-group">
                                <label for="jam_tatap_muka">Jam Tatap Muka</label>
                                <input type="text" class="form-control" id="jam_tatap_muka" name="jam_tatap_muka" placeholder="Masukkan Jam Tatap Muka">
                            </div>
                            <div class="form-group">
                                <label for="total_jam">Total Jam</label>
                                <input type="text" class="form-control" id="total_jam" name="total_jam" placeholder="Masukkan Total Jam">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_guru_karyawan" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <strong>List Guru dan Karyawan</strong>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Gol Ruang</th>
                                    <th>Posisi</th>
                                    <th>Jumlah Kelas</th>
                                    <th>Jam Tatap Muka</th>
                                    <th>Total Jam</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM guru_karyawan");
                                $index  = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <th><?php echo $index++ ?></th>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['nip'] ?></td>
                                        <td><?= $row['gol_ruang'] ?></td>
                                        <td><?= $row['posisi'] ?></td>
                                        <td><?= $row['jumlah_kelas'] ?></td>
                                        <td><?= $row['jam_tatap_muka'] ?></td>
                                        <td><?= $row['total_jam'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td>
                                            <a href="guru_karyawan.php?page=edit&id_guru_karyawan=<?= $row['id_guru_karyawan'] ?>" class="btn btn-warning mb-1">Update</a>
                                            <a href="guru_karyawan.php?delete=<?= $row['id_guru_karyawan'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
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