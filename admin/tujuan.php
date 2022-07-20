<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$id_tujuan      = "";
$tujuan         = "";
$sukses         = "";
$error          = "";

// EDIT
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// EDIT
if ($op == 'edit') {
    $id_tujuan = $_GET['id_tujuan'];
    $sql1   = "SELECT * FROM tujuan WHERE id_tujuan = '$id_tujuan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $tujuan = $r1['tujuan'];

    if ($tujuan == '') {
        $error = "Data tidak ditemukan";
    }
}

// DELETE
if ($op == 'delete') {
    $id_tujuan      = $_GET['id_tujuan'];
    $sql1   = "DELETE FROM tujuan WHERE id_tujuan = '$id_tujuan'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}

// CREATE
if (isset($_POST['simpan_tujuan'])) {
    $tujuan  = $_POST['tujuan'];

    if ($tujuan) {
        // Simpan edit
        if ($op == 'edit') {
            $sql1   = "UPDATE tujuan SET tujuan = '$tujuan' WHERE id_tujuan = '$id_tujuan'";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Memperbarui data BERHASIL!";
            } else {
                $error      = "GAGAL memperbarui data!";
            }
        } else {
            // Simpan data
            $sql1   = "INSERT INTO tujuan(tujuan) VALUES ('$tujuan')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Menambahkan data baru BERHASIL!";
            } else {
                $error      = "GAGAL menambahkan data baru!";
            }
        }
    } else {
        $error  = "Silahkan masukkan data!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DB Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Fullscreen -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Administrator</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- User -->
                        <li class="nav-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="users.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>ADMIN</p>
                            </a>
                        </li>

                        <!-- Berita -->
                        <!-- <li class="nav-header">--</li> -->
                        <li class="nav-item">
                            <a href="berita.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Berita</p>
                            </a>
                        </li>

                        <!-- Carousel -->
                        <!-- <li class="nav-header">--</li> -->
                        <li class="nav-item">
                            <a href="carousel.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Carousel</p>
                            </a>
                        </li>

                        <!-- Galeri -->
                        <!-- <li class="nav-header">--</li> -->
                        <li class="nav-item">
                            <a href="galeri.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Galeri</p>
                            </a>
                        </li>

                        <!-- Kontak -->
                        <!-- <li class="nav-header">--</li> -->
                        <li class="nav-item">
                            <a href="kontak_sosmed.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Kontak</p>
                            </a>
                        </li>

                        <!-- Kritik & Saran -->
                        <!-- <li class="nav-header">--</li> -->
                        <li class="nav-item">
                            <a href="kritik_saran.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Pesan, Kritik & Saran</p>
                            </a>
                        </li>

                        <!-- Profil -->
                        <li class="nav-header">Profil</li>

                        <!-- Guru & Karyawan -->
                        <li class="nav-item">
                            <a href="guru_karyawan.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Guru & Karyawan</p>
                            </a>
                        </li>

                        <!-- Profil Sekolah -->
                        <li class="nav-item">
                            <a href="profil.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Profil Sekolah</p>
                            </a>
                        </li>

                        <!-- Tujuan - Visi & Misi -->
                        <li class="nav-item">
                            <a href="tujuan.php" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Tujuan</p>
                            </a>
                        </li>

                        <!-- Visi -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Visi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-search nav-icon"></i>
                                        <p>Lihat Visi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="visi_tambah.php" class="nav-link">
                                        <i class="far fa-plus-square nav-icon"></i>
                                        <p>Tambah Visi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="visi_edit.php" class="nav-link">
                                        <i class="far fa-edit nav-icon"></i>
                                        <p>Edit Visi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Misi -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Misi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-search nav-icon"></i>
                                        <p>Lihat Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="misi_tambah.php" class="nav-link">
                                        <i class="far fa-plus-square nav-icon"></i>
                                        <p>Tambah Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="misi_edit.php" class="nav-link">
                                        <i class="far fa-edit nav-icon"></i>
                                        <p>Edit Misi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit - Tujuan Sekolah</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tujuan</li>
                            </ol>
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
                                    <?php echo $sukses ?>
                                </div>
                            <?php
                            }
                            ?>

                            <!-- Edit Tujuan -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Tujuan Sekolah</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="tujuan">Isi Tujuan Sekolah</label>
                                            <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukkan isi Tujuan" value="<?php echo $tujuan ?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="simpan_tujuan" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /card -->

                            <!-- List Tujuan Sekolah -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        List tujuan Sekolah
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover table-striped">
                                        <!-- Baris 1 (Jenis Kolom) -->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tujuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <!-- Isi -->
                                        <tbody>
                                            <?php
                                            $sql2   = "SELECT * FROM tujuan";
                                            $q2     = mysqli_query($koneksi, $sql2);
                                            $index  = 1;
                                            while ($r2 = mysqli_fetch_array($q2)) {
                                                $id_tujuan  = $r2['id_tujuan'];
                                                $tujuan     = $r2['tujuan'];
                                            ?>

                                                <tr>
                                                    <th><?php echo $index++ ?></th>
                                                    <td><?php echo $tujuan ?></td>
                                                    <td>
                                                        <a href="tujuan.php?op=edit&id_tujuan=<?php echo $id_tujuan ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                        <a href="tujuan.php?op=delete&id_tujuan=<?php echo $id_tujuan ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
            <strong>Copyright &copy; 2014-2022
                <a href="#">SDN 1 Purwokerto Kulon</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                })
                .buttons()
                .container()
                .appendTo("#example1_wrapper .col-md-6:eq(0)");
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
</body>

</html>