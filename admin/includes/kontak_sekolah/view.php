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
                                            <a href="kontak_sekolah.php?page=edit&id_kontak_sekolah=<?= $row['id_kontak_sekolah'] ?>" class="btn btn-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
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
                                            <a href="kontak_sekolah.php?delete=<?= $row['id_respon_kontak_sekolah'] ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data ?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </a>
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