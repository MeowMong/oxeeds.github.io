<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_program_sekolah'])) {
    $deskripsi_gambar_program_sekolah = escape($_POST['deskripsi_gambar_program_sekolah']);

    $gambar_program_sekolah = $_FILES['gambar_program_sekolah']['name'];
    $gambar_program_sekolah_tmp = $_FILES['gambar_program_sekolah']['tmp_name'];

    move_uploaded_file($gambar_program_sekolah_tmp, "../assets/images/program_sekolah/$gambar_program_sekolah");

    if ($deskripsi_gambar_program_sekolah) {
        // Simpan data
        $query   = query("INSERT INTO program_sekolah(gambar_program_sekolah, deskripsi_gambar_program_sekolah) 
                                VALUES ('$gambar_program_sekolah', '$deskripsi_gambar_program_sekolah') ");
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
    $id_program_sekolah = $_GET['delete'];
    if ($id_program_sekolah) {
        $query = query("DELETE FROM program_sekolah WHERE id_program_sekolah = '$id_program_sekolah'");
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
                <h1 class="text-center"><strong>Data Program Sekolah</strong></h1>
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
                        <a href="program_sekolah.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
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
                        <a href="program_sekolah.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>

                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary border-0 shadow-lg">
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="gambar_program_sekolah">Gambar Program Sekolah</label>
                                <input type="file" class="form-control" id="gambar_program_sekolah" name="gambar_program_sekolah">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi_gambar_program_sekolah">Deskripsi</label>
                                <input type="text" step="any" class="form-control" id="deskripsi_gambar_program_sekolah" name="deskripsi_gambar_program_sekolah" placeholder="Masukkan Deskripsi Gambar Program Sekolah">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="simpan_program_sekolah" class="btn btn-primary btn-block">Tambah Program Sekolah</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->

                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mt-5">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            <strong>List Program Sekolah</strong>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover mb-5">
                            <thead>
                                <tr>
                                    <th class="text-center">Deskripsi Program Sekolah</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = query("SELECT * FROM deskripsi_program_sekolah WHERE id_deskripsi_program='1' ");
                                confirmQuery($query);
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr>
                                        <td><?= $row['deskripsi_program'] ?></td>
                                        <td class="text-center">
                                            <a href="program_sekolah.php?page=edit_deskripsi&id_deskripsi_program=<?= $row['id_deskripsi_program'] ?>" class="btn btn-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Gambar Program Sekolah</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM program_sekolah");
                                $index  = 1;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr class="text-center">
                                        <th><?php echo $index++ ?></th>
                                        <td><img src="../assets/images/program_sekolah/<?= $row['gambar_program_sekolah'] ?>" alt="<?= $row['gambar_program_sekolah'] ?>" width="200"></td>
                                        <td><?= $row['deskripsi_gambar_program_sekolah'] ?></td>
                                        <td>
                                            <a href="program_sekolah.php?page=edit&id_program_sekolah=<?= $row['id_program_sekolah'] ?>" class="btn btn-warning mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            <a href="program_sekolah.php?delete=<?= $row['id_program_sekolah'] ?>" onclick="return confirm('Ingin menghapus data ?')" class="btn btn-danger mt-1">
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