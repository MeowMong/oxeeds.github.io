<?php
$id_program_sekolah = $_GET['id_program_sekolah'];
if (isset($_GET['id_program_sekolah'])) {
    $query = query("SELECT * FROM program_sekolah WHERE id_program_sekolah='$id_program_sekolah' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_program_sekolah'])) {
        $deskripsi_gambar_program_sekolah = escape($_POST['deskripsi_gambar_program_sekolah']);

        $gambar_program_sekolah = $_FILES['gambar_program_sekolah']['name'];
        $gambar_program_sekolah_tmp = $_FILES['gambar_program_sekolah']['tmp_name'];

        move_uploaded_file($gambar_program_sekolah_tmp, "../assets/images/program_sekolah/$gambar_program_sekolah");

        // Jika gambar nya kosong
        if (empty($gambar_program_sekolah)) {
            $query = query("SELECT * FROM program_sekolah WHERE id_program_sekolah='$id_program_sekolah'");
            confirmQuery($query);
            $result = mysqli_fetch_array($query);
            $gambar_program_sekolah = $result['gambar_program_sekolah'];
        }

        $query = query("UPDATE program_sekolah SET gambar_program_sekolah='$gambar_program_sekolah', 
                                                deskripsi_gambar_program_sekolah='$deskripsi_gambar_program_sekolah'
                                                WHERE id_program_sekolah='$id_program_sekolah' ");
        if ($query) {
            redirect('program_sekolah.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Program Sekolah</strong></h1>
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
                <!-- Edit Kurikulum Sekolah  -->
                <div class="card card-primary border-0 shadow-lg">
                    <!-- form start -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="gambar_program_sekolah">Gambar Program</label>
                                <input type="file" class="form-control" id="gambar_program_sekolah" name="gambar_program_sekolah"></input>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_gambar_program_sekolah">Deskripsi Gambar</label>
                                <input type="text" class="form-control" id="deskripsi_gambar_program_sekolah" name="deskripsi_gambar_program_sekolah" value="<?= $result['deskripsi_gambar_program_sekolah'] ?>"></input>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="update_program_sekolah" class="btn btn-warning btn-block">Update Data Program Sekolah</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->