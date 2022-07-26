<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><strong>Kontak dan Alamat Sekolah</strong></h1>
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
                <!-- List Kontak -->
                <div class="card border-0 shadow-lg mb-5">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <!-- Baris 1 (Jenis Kolom) -->
                            <thead>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Youtube</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <!-- Isi -->
                            <tbody>
                                <?php
                                $query   = query("SELECT * FROM kontak_sekolah");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?= $row['no_telp_sekolah'] ?></td>
                                        <td><?= $row['email_sekolah'] ?></td>
                                        <td><?= $row['alamat_sekolah'] ?></td>
                                        <td><?= $row['facebook_sekolah'] ?></td>
                                        <td><?= $row['instagram_sekolah'] ?></td>
                                        <td><?= $row['youtube_sekolah'] ?></td>
                                        <td class="text-center">
                                            <a href="kontak_sekolah.php?page=edit&id_kontak_sekolah=<?= $row['id_kontak_sekolah'] ?>"><button type="button" class="btn btn-warning mt-1">Update</button></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-0 shadow-lg">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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