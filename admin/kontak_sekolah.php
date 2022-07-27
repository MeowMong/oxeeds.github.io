<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$id_kontak  = "";
$no_telp    = "";
$email      = "";
$alamat     = "";
$facebook   = "";
$youtube    = "";
$sukses     = "";
$error      = "";

// EDIT
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// EDIT
if ($op == 'edit') {
    $id_kontak  = $_GET['id_kontak'];
    $query      = "SELECT * FROM kontak_sekolah WHERE id_kontak = '$id_kontak'";
    $q1         = mysqli_query($koneksi, $query);
    $row         = mysqli_fetch_array($q1);
    $no_telp    = $row['no_telp'];
    $email      = $row['email'];
    $alamat     = $row['alamat'];
    $facebook   = $row['facebook'];
    $youtube    = $row['youtube'];

    if ($id_kontak == '') {
        $error = "Data tidak ditemukan";
    }
}

// DELETE
if ($op == 'delete') {
    $id_kontak      = $_GET['id_kontak'];
    $query   = "DELETE FROM kontak_sekolah WHERE id_kontak = '$id_kontak'";
    $q1     = mysqli_query($koneksi, $query);
    if ($q1) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}

// CREATE
if (isset($_POST['simpan_kontak'])) {
    $no_telp    = $_POST['no_telp'];
    $email      = $_POST['email'];
    $alamat     = $_POST['alamat'];
    $facebook   = $_POST['facebook'];
    $youtube    = $_POST['youtube'];
    if ($no_telp || $email || $alamat || $facebook || $youtube) {
        // Simpan edit
        if ($op == 'edit') {
            $query   = "UPDATE kontak_sekolah SET no_telp = '$no_telp', email = '$email', alamat = '$alamat', facebook = '$facebook', youtube = '$youtube'  WHERE id_kontak = '$id_kontak'";
            $q1     = mysqli_query($koneksi, $query);
            if ($q1) {
                $sukses     = "Memperbarui data BERHASIL!";
            } else {
                $error      = "GAGAL memperbarui data!";
            }
        } else {
            // Simpan data
            $query   = "INSERT INTO kontak_sekolah(no_telp, email, alamat, facebook, youtube) VALUES ('$no_telp', '$email', '$alamat' ,'$facebook', '$youtube')";
            $q1     = mysqli_query($koneksi, $query);
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
                <h1 class="text-center">Kontak dan Media Sosial Sekolah</h1>
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
                        <a href="kontak_sekolah.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
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
                        <a href="kontak_sekolah.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>

                <!-- Edit Kontak  -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="POST">
                        <div class="card-body">
                            <!-- No telp-->
                            <div class="form-group">
                                <label for="no_telp">No Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon" value="<?php echo $no_telp ?>" autofocus>
                            </div>
                            <!-- Email-->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?php echo $email ?>">
                            </div>
                            <!-- Alamat-->
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $alamat ?>">
                            </div>
                            <!-- Facebook-->
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Masukkan Facebook" value="<?php echo $facebook ?>">
                            </div>
                            <!-- Youtube-->
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Masukkan Channel" value="<?php echo $youtube ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_kontak" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            List Kontak dan Sosial Media Sekolah
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover table-striped">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Facebook</th>
                                    <th>Youtube</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = "SELECT * FROM kontak_sekolah";
                                $q2     = mysqli_query($koneksi, $query);
                                $index  = 1;
                                while ($row = mysqli_fetch_array($q2)) {
                                    $id_kontak  = $row['id_kontak'];
                                    $no_telp    = $row['no_telp'];
                                    $email      = $row['email'];
                                    $alamat     = $row['alamat'];
                                    $facebook   = $row['facebook'];
                                    $youtube    = $row['youtube'];
                                ?>
                                    <tr>
                                        <th><?= $index++ ?></th>
                                        <td><?= $no_telp ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= $alamat ?></td>
                                        <td><?= $facebook ?></td>
                                        <td><?= $youtube ?></td>
                                        <td>
                                            <a href="kontak_sekolah.php?op=edit&id_kontak=<?php echo $id_kontak ?>"><button type="button" class="btn btn-warning">Update</button></a>
                                            <a href="kontak_sekolah.php?op=delete&id_kontak=<?php echo $id_kontak ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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