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

    move_uploaded_file($gambar_prestasi_tmp, "../assets/images/prestasi/$gambar_prestasi");

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
                                        <input type="date" class="form-control" id="tanggal_prestasi" name="tanggal_prestasi">
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
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Prestasi</th>
                                        <th>Tanggal Prestasi</th>
                                        <th>Tingkat Prestasi</th>
                                        <th>Nama Peraih Prestasi</th>
                                        <th>Lokasi Prestasi</th>
                                        <th>Dokumentasi Prestasi</th>
                                        <th>Keterangan Prestasi</th>
                                        <th>Action</th>
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
                                            <th><img src="../assets/images/prestasi/<?= $row['gambar_prestasi'] ?>" alt="<?= $row['gambar_prestasi'] ?>" width="300"></th>
                                            <th><?= $row['keterangan_prestasi'] ?></th>
                                            <td class="text-center">
                                                <a href="prestasi.php?page=edit&id_prestasi=<?= $row['id_prestasi'] ?>" class="btn btn-warning mt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <a href="prestasi.php?delete=<?= $row['id_prestasi'] ?>" class="btn btn-danger mt-1" onclick="return confirm('Ingin Menghapus Data ?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                    Hapus
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
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->