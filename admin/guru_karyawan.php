<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$id                = "";
$nama              = "";
$nip               = "";
$gol_ruang         = "";
$posisi            = "";
$jumlah_kelas      = "";
$jam_tatap_muka    = "";
$total_jam         = "";
$keterangan        = "";
$sukses            = "";
$error             = "";

// EDIT
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// EDIT
if ($op == 'edit') {
    $id  = $_GET['id'];
    $sql1       = "SELECT * FROM guru_karyawan WHERE id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama            = $r1['nama'];
    $nip             = $r1['nip'];
    $gol_ruang       = $r1['gol_ruang'];
    $posisi          = $r1['posisi'];
    $jumlah_kelas    = $r1['jumlah_kelas'];
    $jam_tatap_muka  = $r1['jam_tatap_muka'];
    $total_jam       = $r1['total_jam'];
    $keterangan      = $r1['keterangan'];



    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}

// DELETE
if ($op == 'delete') {
    $id      = $_GET['id'];
    $sql1   = "DELETE FROM guru_karyawan WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}

// CREATE
if (isset($_POST['simpan_guru_karyawan'])) {
    $nama    = $_POST['nama'];
    $nip    = $_POST['nip'];
    $gol_ruang    = $_POST['gol_ruang'];
    $posisi    = $_POST['posisi'];
    $jumlah_kelas    = $_POST['jumlah_kelas'];
    $jam_tatap_muka    = $_POST['jam_tatap_muka'];
    $total_jam    = $_POST['total_jam'];
    $keterangan    = $_POST['keterangan'];
    if ($nama || $nip || $gol_ruang || $posisi || $jumlah_kelas || $jam_tatap_muka || $total_jam || $keterangan) {
        // Simpan edit
        if ($op == 'edit') {
            $sql1   = "UPDATE guru_karyawan SET nama = '$nama', nip = '$nip', gol_ruang = '$gol_ruang', posisi = '$posisi', jumlah_kelas = '$jumlah_kelas', jam_tatap_muka = '$jam_tatap_muka', total_jam = '$total_jam', keterangan = '$keterangan'  WHERE id = '$id'";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Memperbarui data BERHASIL!";
            } else {
                $error      = "GAGAL memperbarui data!";
            }
        } else {
            // Simpan data
            $sql1   = "INSERT INTO guru_karyawan(nama, nip, gol_ruang, posisi, jumlah_kelas, jam_tatap_muka, total_jam, keterangan) VALUES ('$nama', '$nip', '$gol_ruang', '$posisi', '$jumlah_kelas', '$jam_tatap_muka', '$total_jam', '$keterangan')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Menambahkan data baru BERHASIL!";
            } else {
                $error      = "GAGAL menambahkan data baru!";
            }
        }
    } else {
        $error  = "Silahkan masukkan data!";
    }
}
?>
<?php include 'includes/admin_header.php' ?>
<?php include 'includes/admin_navigation.php' ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Guru dan Karyawan</h1>
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
                        <a href="guru_karyawan.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
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
                        <a href="guru_karyawan.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>

                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="" method="POST">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo $nama ?>" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="nip">Nip</label>
                                <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan Nip" value="<?php echo $nip ?>">
                            </div>

                            <div class="form-group">
                                <label for="gol_ruang">Gol Ruang</label>
                                <input type="text" class="form-control" id="gol_ruang" name="gol_ruang" placeholder="Masukkan Golongan Ruang" value="<?php echo $gol_ruang ?>">
                            </div>

                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Masukkan Posisi" value="<?php echo $posisi ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kelas">Jumlah Kelas</label>
                                <input type="text" class="form-control" id="jumlah_kelas" name="jumlah_kelas" placeholder="Masukkan Jumlah Kelas" value="<?php echo $jumlah_kelas ?>">
                            </div>
                            <div class="form-group">
                                <label for="jam_tatap_muka">Jam Tatap Muka</label>
                                <input type="text" class="form-control" id="jam_tatap_muka" name="jam_tatap_muka" placeholder="Masukkan Jam Tatap Muka" value="<?php echo $jam_tatap_muka ?>">
                            </div>
                            <div class="form-group">
                                <label for="total_jam">Total Jam</label>
                                <input type="text" class="form-control" id="total_jam" name="total_jam" placeholder="Masukkan Total Jam" value="<?php echo $total_jam ?>">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo $keterangan ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_guru_karyawan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            List Guru & Karyawan
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover table-striped">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr>
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
                                $sql2   = "SELECT * FROM guru_karyawan";
                                $q2     = mysqli_query($koneksi, $sql2);
                                $index  = 1;
                                while ($r2 = mysqli_fetch_array($q2)) {
                                    $id  = $r2['id'];
                                    $nama           = $r2['nama'];
                                    $nip            = $r2['nip'];
                                    $gol_ruang      = $r2['gol_ruang'];
                                    $posisi         = $r2['posisi'];
                                    $jumlah_kelas   = $r2['jumlah_kelas'];
                                    $jam_tatap_muka = $r2['jam_tatap_muka'];
                                    $total_jam      = $r2['total_jam'];
                                    $keterangan     = $r2['keterangan'];
                                ?>
                                    <tr>
                                        <th><?php echo $index++ ?></th>
                                        <td><?php echo $nama ?></td>
                                        <td><?php echo $nip ?></td>
                                        <td><?php echo $gol_ruang ?></td>
                                        <td><?php echo $posisi ?></td>
                                        <td><?php echo $jumlah_kelas ?></td>
                                        <td><?php echo $jam_tatap_muka ?></td>
                                        <td><?php echo $total_jam ?></td>
                                        <td><?php echo $keterangan ?></td>
                                        <td>
                                            <a href="guru_karyawan.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="guru_karyawan.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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

<?php include 'includes/admin_footer.php' ?>