<?php
$sukses = '';
$error = '';

if (isset($_GET['delete'])) {
    $id_respon_kontak_sekolah = $_GET['delete'];
    if ($id_respon_kontak_sekolah) {
        $query = query("DELETE FROM respon_kontak_sekolah WHERE id_respon_kontak_sekolah='$id_respon_kontak_sekolah' ");
        confirmQuery($query);
        if ($query) {
            $sukses = "BERHASIL Menghapus Data!";
        } else {
            $error = "GAGAL Menhapus Data!";
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Kontak dan Alamat Sekolah</strong></h1>
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
                    <div class="alert alert-danger opacity-50" role="alert">
                        <a href="kontak_sekolah.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="kontak_sekolah.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <!-- List Kontak -->
                <div class="card border-0 shadow-lg">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Youtube</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM kontak_sekolah");
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?= $row['no_telp_sekolah'] ?></td>
                                        <td><?= $row['email_sekolah'] ?></td>
                                        <td><?= $row['alamat_sekolah'] ?></td>
                                        <td><?= $row['facebook_sekolah'] ?></td>
                                        <td><?= $row['instagram_sekolah'] ?></td>
                                        <td><?= $row['youtube_sekolah'] ?></td>
                                        <td class="text-center">
                                            <a href="kontak_sekolah.php?page=edit&id_kontak_sekolah=<?= $row['id_kontak_sekolah'] ?>"><button type="button" class="btn btn-warning mt-1">Update</button></a>
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
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = query("SELECT * FROM respon_kontak_sekolah");
                                confirmQuery($query);
                                $index = 1;
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?= $index++ ?></td>
                                        <td><?= $row['name_respon_kontak_sekolah'] ?></td>
                                        <td><?= $row['kontak_perespon_kontak_sekolah'] ?></td>
                                        <td><?= $row['pesan_respon_kontak_sekolah'] ?></td>
                                        <td><?= $row['tanggal_respon_kontak_sekolah'] ?></td>
                                        <td>
                                            <a href="kontak_sekolah.php?delete=<?= $row['id_respon_kontak_sekolah'] ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data ?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- /.content -->