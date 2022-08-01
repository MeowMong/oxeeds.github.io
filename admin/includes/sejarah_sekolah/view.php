<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Sejarah Sekolah</strong></h1>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- List Sejarah Sekolah -->
                    <div class="card border-0 shadow-lg">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover mb-5">
                                <thead>
                                    <tr>
                                        <th class="text-center">Alinea</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Deskripsi Sejarah</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = query("SELECT * FROM sejarah_sekolah");
                                    confirmQuery($query);
                                    $index = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $index++ ?></td>
                                            <td><img src="../assets/images/sejarah_sekolah/<?= $row['gambar_sejarah_sekolah'] ?>" alt="<?= $row['gambar_sejarah_sekolah'] ?>" width="300"></td>
                                            <td><?= $row['deskripsi_sejarah_sekolah'] ?></td>
                                            <td class="text-center">
                                                <a href="sejarah_sekolah.php?page=edit&id_sejarah_sekolah=<?= $row['id_sejarah_sekolah'] ?>" class="btn btn-warning">Update</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
</div>
<!-- /.content-wrapper -->