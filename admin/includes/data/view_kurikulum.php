<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Data Kurikulum Sekolah</strong></h1>
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
                <!-- List Kurikulum Sekolah -->
                <div class="card border-0 shadow-lg mt-5">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover ">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr class="text-center">
                                    <th>Deskripsi Kurikulum</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM kurikulum_sekolah");
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr class="text-center">
                                        <td><?= $row['deskripsi_kurikulum_sekolah'] ?></td>
                                        <td>
                                            <a href="kurikulum_sekolah.php?page=edit&id_kurikulum_sekolah=<?= $row['id_kurikulum_sekolah'] ?>" class="btn btn-warning mt-1">Update</a>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->