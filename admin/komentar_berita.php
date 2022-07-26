<?php include 'includes/admin_header.php'; ?>
<?php include 'includes/admin_navigation.php'; ?>
<?php
$sukses = '';
$error = '';
// DELETE
if (isset($_GET['delete'])) {
    $id_komentar_berita = $_GET['delete'];
    $query   = query("DELETE FROM komentar_berita WHERE id_komentar_berita = '$id_komentar_berita'");
    if ($query) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><strong>Komentar Berita</strong></h1>
        </div>
    </div>

    <!-- Alert Gagal -->
    <?php
    if ($error) {
    ?>
        <div class="card-tools alert alert-danger opacity-50" role="alert">
            <a href="komentar_berita.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
            <a href="komentar_berita.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
            <?php echo $sukses ?>
        </div>
    <?php
    }
    ?>


    <!-- List Kontak -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <!-- Baris 1 (Jenis Kolom) -->
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Kategori Berita</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <!-- Isi -->
                <tbody>
                    <?php
                    $query   = query("SELECT * FROM komentar_berita");
                    $index  = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        $id_komentar_berita = $row['id_komentar_berita'];
                        $komentar_id_berita = $row['komentar_id_berita'];
                        $nama_komentar = $row['nama_komentar'];
                        $email_komentar = $row['email_komentar'];
                        $isi_komentar = $row['isi_komentar'];
                        $tanggal_komentar = $row['tanggal_komentar']
                    ?>
                        <tr>
                            <th class="text-center"><?php echo $index++ ?></th>
                            <td><?php echo $komentar_id_berita ?></td>
                            <td><?php echo $nama_komentar ?></td>
                            <td><?php echo $email_komentar ?></td>
                            <td><?php echo $isi_komentar ?></td>
                            <td><?php echo $tanggal_komentar ?></td>
                            <td>
                                <a href="komentar_berita.php?delete=<?php echo $id_komentar_berita ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include 'includes/admin_footer.php'; ?>