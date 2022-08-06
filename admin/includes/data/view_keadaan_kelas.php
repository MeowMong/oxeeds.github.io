<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_keadaan_kelas'])) {
    $nama_ruang_kelas = escape($_POST['nama_ruang_kelas']);
    $panjang_kelas = escape($_POST['panjang_kelas']);
    $lebar_kelas = escape($_POST['lebar_kelas']);
    $satuan_kelas = escape($_POST['satuan_kelas']);
    $keadaan_kelas = escape($_POST['keadaan_kelas']);

    if ($nama_ruang_kelas && $panjang_kelas && $lebar_kelas && $keadaan_kelas) {
        // Simpan data
        $query   = query("INSERT INTO keadaan_kelas(nama_ruang_kelas, panjang_kelas, lebar_kelas, satuan_kelas, keadaan_kelas) 
                                VALUES ('$nama_ruang_kelas', '$panjang_kelas', '$lebar_kelas', '$satuan_kelas', '$keadaan_kelas') ");
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
    $id_keadaan_kelas = $_GET['delete'];
    if ($id_keadaan_kelas) {
        $query = query("DELETE FROM keadaan_kelas WHERE id_keadaan_kelas = '$id_keadaan_kelas'");
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
                <h1 class="text-center"><strong>Data Keadaan Kelas</strong></h1>
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
                        <a href="keadaan_kelas.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="keadaan_kelas.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
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
                                <label for="nama_ruang_kelas">Nama Ruang</label>
                                <input type="text" class="form-control" id="nama_ruang_kelas" name="nama_ruang_kelas" placeholder="Masukkan Nama Ruang" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="panjang_kelas">Panjang (m)</label>
                                <input type="number" step="any" class="form-control" id="panjang_kelas" name="panjang_kelas" placeholder="Masukkan Panjang Ruang">
                            </div>

                            <div class="form-group">
                                <label for="lebar_kelas">Lebar (m)</label>
                                <input type="number" step="any" class="form-control" id="lebar_kelas" name="lebar_kelas" placeholder="Masukkan Lebar Ruang">
                            </div>

                            <div class="form-group">
                                <label for="satuan_kelas">Satuan</label>
                                <input type="text" class="form-control" id="satuan_kelas" name="satuan_kelas" placeholder="Masukkan Satuan Ruang">
                            </div>
                            <div class="form-group">
                                <label>Keadaan Kelas</label>
                                <select class="form-control" name="keadaan_kelas">
                                    <option>Pilih Keadaan Kelas</option>
                                    <?php
                                    $query = query("SELECT * FROM category_keadaan_kelas");
                                    confirmQuery($query);
                                    while ($item = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <option value="<?php echo $item['id_category_keadaan_kelas'] ?>"><?php echo $item['category_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_keadaan_kelas" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <strong>List Keadaan Kelas</strong>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Ruang</th>
                                    <th>Panjang (m)</th>
                                    <th>lebar (m)</th>
                                    <th>Satuan</th>
                                    <th>Keadaan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM keadaan_kelas");
                                $index  = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $index++ ?></th>
                                        <td><?= $row['nama_ruang_kelas'] ?></td>
                                        <td><?= $row['panjang_kelas'] ?></td>
                                        <td><?= $row['lebar_kelas'] ?></td>
                                        <td><?= $row['satuan_kelas'] ?></td>
                                        <td><?= $row['keadaan_kelas'] ?></td>
                                        <td><?= $row['keterangan_kelas'] ?></td>
                                        <td>
                                            <a href="keadaan_kelas.php?page=edit&id_keadaan_kelas=<?= $row['id_keadaan_kelas'] ?>" class="btn btn-warning mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            <a href="keadaan_kelas.php?delete=<?= $row['id_keadaan_kelas'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
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
</section>
<!-- /.content -->