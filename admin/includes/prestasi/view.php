<?php
$sukses = "";
$error = "";

if (isset($_POST['simpan_prestasi'])) {
    $nama_prestasi = escape($_POST['nama_prestasi']);
    $tanggal_prestasi = escape($_POST['tanggal_prestasi']);
    $tingkat_prestasi = escape($_POST['tingkat_prestasi']);
    $nama_peraih_prestasi = escape($_POST['nama_peraih_prestasi']);
    $lokasi_prestasi = escape($_POST['lokasi_prestasi']);
    $keterangan_prestasi = escape($_POST['keterangan_prestasi']);

    $gambar_prestasi = $_FILES['gambar_prestasi']['name'];
    $gambar_prestasi_tmp = $_FILES['gambar_prestasi']['tmp_name'];

    move_uploaded_file($gambar_prestasi_tmp, "../img/prestasi/$gambar_prestasi");

    if ($nama_prestasi || $tanggal_prestasi || $tingkat_prestasi || $nama_peraih_prestasi || $lokasi_prestasi || $keterangan_prestasi) {
        $query   = query("INSERT INTO prestasi(nama_prestasi, tanggal_prestasi, tingkat_prestasi, nama_peraih_prestasi, lokasi_prestasi, gambar_prestasi, keterangan_prestasi) 
                        VALUES ('$nama_prestasi','$tanggal_prestasi','$tingkat_prestasi','$nama_peraih_prestasi','$lokasi_prestasi','$gambar_prestasi','$keterangan_prestasi') ");
        confirmQuery($query);
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Data KOSONG! Silahkan masukkan data!";
    }
}

if (isset($_GET['delete'])) {
    $id_prestasi = $_GET['delete'];
    if ($id_prestasi) {
        $query = query("DELETE FROM prestasi WHERE id_prestasi='$id_prestasi' ");
        confirmQuery($query);
        if ($query) {
            $sukses = "BERHASIL Menghapus Data!";
        }
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Prestasi</strong></h1>
        </div>
    </div>

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
                            <a href="prestasi.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                            <a href="prestasi.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                            <?php echo $sukses ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="card border-0 shadow-lg">

                        <!-- Tambah Deskripsi & Isi Misi-->
                        <div class="card card-warning">
                            <!-- form start -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_prestasi">Nama Prestasi</label>
                                        <input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" placeholder="Masukkan Nama Prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_prestasi">Tangal Prestasi</label>
                                        <input type="date" class="form-control" id="tanggal_prestasi" name="tanggal_prestasi" placeholder="Masukkan Tanggal Prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="tingkat_prestasi">Tingkat Prestasi</label>
                                        <input type="text" class="form-control" id="tingkat_prestasi" name="tingkat_prestasi" placeholder="Masukkan Tingkat Prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_peraih_prestasi">Nama Peraih Prestasi</label>
                                        <input type="text" class="form-control" id="nama_peraih_prestasi" name="nama_peraih_prestasi" placeholder="Masukkan Nama Peraih Prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi_prestasi">Lokasi Prestasi</label>
                                        <input type="text" class="form-control" id="lokasi_prestasi" name="lokasi_prestasi" placeholder="Masukkan Lokasi Prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar_prestasi">Dokumentasi Prestasi</label>
                                        <input type="file" class="form-control" id="gambar_prestasi" name="gambar_prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_prestasi">Keterangan Prestasi</label>
                                        <input type="text" class="form-control" id="keterangan_prestasi" name="keterangan_prestasi" placeholder="Masukkan Keterangan Prestasi">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan_prestasi" class="btn btn-primary btn-block">Tambah Prestasi</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card bordered-0 shadow-lg">
                        <div class="card-header text-center">
                            <h3><strong>Tabel Data Prestasi</strong></h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Prestasi</th>
                                        <th class="text-center">Tanggal Prestasi</th>
                                        <th class="text-center">Tingkat Prestasi</th>
                                        <th class="text-center">Nama Peraih Prestasi</th>
                                        <th class="text-center">Lokasi Prestasi</th>
                                        <th class="text-center">Dokumentasi Prestasi</th>
                                        <th class="text-center">Keterangan Prestasi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM prestasi");
                                    confirmQuery($query);
                                    $index = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $index++ ?></td>
                                            <th><?= $row['nama_prestasi'] ?></th>
                                            <th><?= $row['tanggal_prestasi'] ?></th>
                                            <th><?= $row['tingkat_prestasi'] ?></th>
                                            <th><?= $row['nama_peraih_prestasi'] ?></th>
                                            <th><?= $row['lokasi_prestasi'] ?></th>
                                            <th><img src="../img/prestasi/<?= $row['gambar_prestasi'] ?>" alt="<?= $row['gambar_prestasi'] ?>" width="300"></th>
                                            <th><?= $row['keterangan_prestasi'] ?></th>
                                            <td class="text-center">
                                                <a href="prestasi.php?page=edit&id_prestasi=<?= $row['id_prestasi'] ?>" class="btn btn-warning mt-1">Update</a>
                                                <a href="prestasi.php?delete=<?= $row['id_prestasi'] ?>" class="btn btn-danger mt-1" onclick="return confirm('Ingin Menghapus Data ?')">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->