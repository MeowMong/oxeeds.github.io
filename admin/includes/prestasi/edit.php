<?php
$id_prestasi = $_GET['id_prestasi'];
if (isset($_GET['id_prestasi'])) {
    $query = query("SELECT * FROM prestasi WHERE id_prestasi='$id_prestasi' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_prestasi'])) {
        $nama_prestasi = escape($_POST['nama_prestasi']);
        $tanggal_prestasi = escape($_POST['tanggal_prestasi']);
        $tingkat_prestasi = escape($_POST['tingkat_prestasi']);
        $nama_peraih_prestasi = escape($_POST['nama_peraih_prestasi']);
        $lokasi_prestasi = escape($_POST['lokasi_prestasi']);
        $keterangan_prestasi = escape($_POST['keterangan_prestasi']);

        $gambar_prestasi = $_FILES['gambar_prestasi']['name'];
        $gambar_prestasi_tmp = $_FILES['gambar_prestasi']['tmp_name'];

        move_uploaded_file($gambar_prestasi_tmp, "../img/prestasi/$gambar_prestasi");

        // Jika gambar nya kosong
        if (empty($gambar_prestasi)) {
            $query = query("SELECT * FROM prestasi WHERE id_prestasi='$id_prestasi'");
            confirmQuery($query);
            $result = mysqli_fetch_assoc($query);
            $gambar_prestasi = $result['gambar_prestasi'];
        }

        // Query Edit
        $query = query("UPDATE prestasi SET nama_prestasi='$nama_prestasi', 
                                            tanggal_prestasi='$tanggal_prestasi',
                                            tingkat_prestasi='$tingkat_prestasi',
                                            nama_peraih_prestasi='$nama_peraih_prestasi',
                                            lokasi_prestasi='$lokasi_prestasi',
                                            gambar_prestasi='$gambar_prestasi',
                                            keterangan_prestasi='$keterangan_prestasi'
                                            WHERE id_prestasi='$id_prestasi' ");
        if ($query) {
            redirect('prestasi.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Prestasi</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_prestasi">Nama Prestasi</label>
                                <input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" value="<?= $result['nama_prestasi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_prestasi">Tangal Prestasi</label>
                                <input type="date" class="form-control" id="tanggal_prestasi" name="tanggal_prestasi" value="<?= $result['tanggal_prestasi'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="tingkat_prestasi">Tingkat Prestasi</label>
                                <input type="text" class="form-control" id="tingkat_prestasi" name="tingkat_prestasi" value="<?= $result['tingkat_prestasi'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="nama_peraih_prestasi">Nama Peraih Prestasi</label>
                                <input type="text" class="form-control" id="nama_peraih_prestasi" name="nama_peraih_prestasi" value="<?= $result['nama_peraih_prestasi'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="lokasi_prestasi">Lokasi Prestasi</label>
                                <input type="text" class="form-control" id="lokasi_prestasi" name="lokasi_prestasi" value="<?= $result['lokasi_prestasi'] ?>">
                            </div>
                            <div class=" form-group">
                                <label for="gambar_prestasi">Dokumentasi Prestasi</label>
                                <input type="file" class="form-control" id="gambar_prestasi" name="gambar_prestasi">
                            </div>
                            <div class="form-group">
                                <label for="keterangan_prestasi">Keterangan Prestasi</label>
                                <input type="text" class="form-control" id="keterangan_prestasi" name="keterangan_prestasi" value="<?= $result['keterangan_prestasi'] ?>">
                            </div>
                        </div>
                        <div class=" card-footer">
                            <button type="submit" name="update_prestasi" class="btn btn-warning btn-block">Update Data Prestasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>