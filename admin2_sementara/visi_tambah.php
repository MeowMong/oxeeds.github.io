<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$isi_desk_visi  = "";
$isi_visi       = "";
$sukses         = "";
$error          = "";

if (isset($_POST['simpan_desk_visi'])) {
    $isi_desk_visi  = $_POST['isi_desk_visi'];

    if ($isi_desk_visi) {
        $sql1   = "INSERT INTO desk_visi(isi_desk_visi) VALUES ('$isi_desk_visi')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Menambahkan data baru (Visi) BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Deskripsi Visi KOSONG! Silahkan masukkan data!";
    }
} else if (isset($_POST['simpan_visi'])) {
    $isi_visi = $_POST['isi_visi'];

    if ($isi_visi) {
        $sql1   = "INSERT INTO visi(isi_visi) VALUES ('$isi_visi');";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Menambahkan data baru (Misi) BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Isi Visi KOSONG! Silahkan masukkan data!";
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
                            <a href="tujuan.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Tujuan</p>
                            </a>
                        </li>

                        <!-- Visi -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Visi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="visi_lihat.php" class="nav-link">
                                        <i class="fas fa-search nav-icon"></i>
                                        <p>Lihat Visi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
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
                                    <a href="misi_lihat.php" class="nav-link">
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

                        <!-- Title Sidebar-->
                        <li class="nav-header">Guru & Karyawan</li>
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
                            <h1>Visi & Misi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Visi & Misi</li>
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
                                <div class="alert alert-danger opacity-50" role="alert">
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
                            <div class="card">
                                <!-- Tambah Deskripsi Visi-->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Deskripsi Visi</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="isi_desk_visi">Deskripsi Visi</label>
                                                <textarea class="form-control" rows="3" id="isi_desk_visi" name="isi_desk_visi" placeholder="Masukkan Deskripsi Visi"></textarea>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" name="simpan_desk_visi" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->


                                <!-- Tambah Isi Visi-->
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Isi Visi</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="isi_visi">Isi Visi</label>
                                                <input type="text" class="form-control" id="isi_visi" name="isi_visi" placeholder="Masukkan isi Visi">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" name="simpan_visi" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
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