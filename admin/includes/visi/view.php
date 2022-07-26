<?php
$sukses         = "";
$error          = "";

// Menghapus Data
if (isset($_GET['delete'])) {
    $id_visi = $_GET['delete'];
    if ($id_visi) {
        $query = query("DELETE FROM visi WHERE id_visi='$id_visi' ");
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
            <h1 class="text-center"><strong>Visi</strong></h1>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card bordered-0 shadow-lg">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Deskripsi Visi</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM visi");
                                    confirmQuery($query);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $row['isi_visi'] ?></td>
                                            <td class="text-center">
                                                <a href="visi.php?page=edit&id_visi=<?= $row['id_visi'] ?> " class="btn btn-warning">Update</a>
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