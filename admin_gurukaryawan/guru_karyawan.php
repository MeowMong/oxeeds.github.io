<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$id                = "";
$nama              = ""; 
$nip               = "";
$gol_ruang         = "";
$posisi            = "";
$jumlah_kelas      = "";
$jam_tatap_muka    = "";
$total_jam         = "";
$keterangan        = "";
$sukses            = "";
$error             = "";

// EDIT
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// EDIT
if ($op == 'edit') {
    $id  = $_GET['id'];
    $sql1       = "SELECT * FROM guru_karyawan WHERE id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama            = $r1['nama']; 
    $nip             = $r1['nip']; 
    $gol_ruang       = $r1['gol_ruang']; 
    $posisi          = $r1['posisi']; 
    $jumlah_kelas    = $r1['jumlah_kelas']; 
    $jam_tatap_muka  = $r1['jam_tatap_muka']; 
    $total_jam       = $r1['total_jam']; 
    $keterangan      = $r1['keterangan']; 
    


    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}

// DELETE
if ($op == 'delete') {
    $id      = $_GET['id'];
    $sql1   = "DELETE FROM guru_karyawan WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}

// CREATE
if (isset($_POST['simpan_guru_karyawan'])) { 
    $nama    = $_POST['nama']; 
    $nip    = $_POST['nip']; 
    $gol_ruang    = $_POST['gol_ruang']; 
    $posisi    = $_POST['posisi']; 
    $jumlah_kelas    = $_POST['jumlah_kelas']; 
    $jam_tatap_muka    = $_POST['jam_tatap_muka']; 
    $total_jam    = $_POST['total_jam']; 
    $keterangan    = $_POST['keterangan']; 
    if ($nama || $nip || $gol_ruang || $posisi || $jumlah_kelas || $jam_tatap_muka || $total_jam || $keterangan) {
        // Simpan edit
        if ($op == 'edit') {
            $sql1   = "UPDATE guru_karyawan SET nama = '$nama', nip = '$nip', gol_ruang = '$gol_ruang', posisi = '$posisi', jumlah_kelas = '$jumlah_kelas', jam_tatap_muka = '$jam_tatap_muka', total_jam = '$total_jam', keterangan = '$keterangan'  WHERE id = '$id'";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Memperbarui data BERHASIL!";
            } else {
                $error      = "GAGAL memperbarui data!";
            }
        } else {
            // Simpan data
            $sql1   = "INSERT INTO guru_karyawan(nama, nip, gol_ruang, posisi, jumlah_kelas, jam_tatap_muka, total_jam, keterangan) VALUES ('$nama', '$nip', '$gol_ruang', '$posisi', '$jumlah_kelas', '$jam_tatap_muka', '$total_jam', '$keterangan')";
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
                            <a href="guru_karyawan.php" class="nav-link active">
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
                        <li class="nav-item">
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
                            <h1>Edit - Guru & Karyawan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Guru & Karyawan</li>
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
                                <a href="guru_karyawan.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
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
                                <a href="guru_karyawan.php"><button type="button" class="btn btn-tool"><i class="fas fa-times"></i></button></a>
                                    <?php echo $sukses ?>
                                </div>
                            <?php
                            }
                            ?>

                            <!-- Edit Guru & Karyawan  -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Guru & Karyawan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="POST">
                                    <div class="card-body">
                                        
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo $nama ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="nip">Nip</label>
                                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan Nip" value="<?php echo $nip ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="gol_ruang">Gol Ruang</label>
                                            <input type="text" class="form-control" id="gol_ruang" name="gol_ruang" placeholder="Masukkan Golongan Ruang" value="<?php echo $gol_ruang ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="posisi">Posisi</label>
                                            <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Masukkan Posisi" value="<?php echo $posisi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_kelas">Jumlah Kelas</label>
                                            <input type="text" class="form-control" id="jumlah_kelas" name="jumlah_kelas" placeholder="Masukkan Jumlah Kelas" value="<?php echo $jumlah_kelas ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_tatap_muka">Jam Tatap Muka</label>
                                            <input type="text" class="form-control" id="jam_tatap_muka" name="jam_tatap_muka" placeholder="Masukkan Jam Tatap Muka" value="<?php echo $jam_tatap_muka ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="total_jam">Total Jam</label>
                                            <input type="text" class="form-control" id="total_jam" name="total_jam" placeholder="Masukkan Total Jam" value="<?php echo $total_jam ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo $keterangan ?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="simpan_guru_karyawan" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /card -->

                            <!-- List Kontak -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        List Guru & Karyawan
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover table-striped">
                                        <!-- Baris 1 (Jenis Kolom) -->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Nip</th>
                                                <th>Gol Ruang</th>
                                                <th>Posisi</th>
                                                <th>Jumlah Kelas</th>
                                                <th>Jam Tatap Muka</th>
                                                <th>Total Jam</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <!-- Isi -->
                                        <tbody>
                                            <?php
                                            $sql2   = "SELECT * FROM guru_karyawan";
                                            $q2     = mysqli_query($koneksi, $sql2);
                                            $index  = 1;
                                            while ($r2 = mysqli_fetch_array($q2)) {
                                                $id  = $r2['id'];
                                                $nama           = $r2['nama']; 
                                                $nip            = $r2['nip']; 
                                                $gol_ruang      = $r2['gol_ruang']; 
                                                $posisi         = $r2['posisi']; 
                                                $jumlah_kelas   = $r2['jumlah_kelas']; 
                                                $jam_tatap_muka = $r2['jam_tatap_muka']; 
                                                $total_jam      = $r2['total_jam']; 
                                                $keterangan     = $r2['keterangan']; 
                                                ?>
                                                <tr>
                                                    <th><?php echo $index++ ?></th>
                                                    <td><?php echo $nama ?></td>
                                                    <td><?php echo $nip ?></td>
                                                    <td><?php echo $gol_ruang ?></td>
                                                    <td><?php echo $posisi ?></td>
                                                    <td><?php echo $jumlah_kelas ?></td>
                                                    <td><?php echo $jam_tatap_muka ?></td>
                                                    <td><?php echo $total_jam ?></td>
                                                    <td><?php echo $keterangan ?></td>
                                                    <td>
                                                        <a href="guru_karyawan.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                        <a href="guru_karyawan.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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