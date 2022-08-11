<?php
$id_tatib_sekolah = $_GET['id_tatib_sekolah'];
if (isset($_GET['id_tatib_sekolah'])) {
    $query = query("SELECT * FROM tatib_sekolah WHERE id_tatib_sekolah='$id_tatib_sekolah' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update_tatib_sekolah'])) {
        $poin_tatib_sekolah = escape($_POST['poin_tatib_sekolah']);

        $query = query("UPDATE tatib_sekolah SET poin_tatib_sekolah='$poin_tatib_sekolah'
                                                WHERE id_tatib_sekolah='$id_tatib_sekolah' ");
        if ($query) {
            redirect('tatib_sekolah.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Update Poin Tata Tertib</strong></h1>
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
                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label>Poin Tata Tertib</label>
                                <textarea class="form-control" name="poin_tatib_sekolah" value=""><?= $result['poin_tatib_sekolah'] ?></textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="update_tatib_sekolah" class="btn btn-warning">Update Data</button>
                            <a href="tatib_sekolah.php" class="btn btn-secondary">Kembali</a>
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