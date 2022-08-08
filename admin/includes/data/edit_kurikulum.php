<?php
$id_kurikulum_sekolah = $_GET['id_kurikulum_sekolah'];
if (isset($_GET['id_kurikulum_sekolah'])) {
    $query = query("SELECT * FROM kurikulum_sekolah WHERE id_kurikulum_sekolah='$id_kurikulum_sekolah' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_kurikulum_sekolah'])) {
        $deskripsi_kurikulum_sekolah = escape($_POST['deskripsi_kurikulum_sekolah']);

        $query = query("UPDATE kurikulum_sekolah SET deskripsi_kurikulum_sekolah='$deskripsi_kurikulum_sekolah'
                                                WHERE id_kurikulum_sekolah='$id_kurikulum_sekolah' ");
        if ($query) {
            redirect('kurikulum_sekolah.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Data Kurikulum Sekolah</strong></h1>
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
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="deskripsi_kurikulum_sekolah">Deskripsi Kurikulum</label>
                                <textarea class="form-control" id="deskripsi_kurikulum_sekolah" name="deskripsi_kurikulum_sekolah" autofocus><?= $result['deskripsi_kurikulum_sekolah'] ?></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="update_kurikulum_sekolah" class="btn btn-warning btn-block">Update Data Kurikulum Sekolah</button>
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