<?php
$id_carr = $_GET['id_carr'];
if (isset($_GET['id_carr'])) {
    $query = query("SELECT * FROM carousel WHERE id_carr='$id_carr' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);
    $gambar_carr = $result['gambar_carr'];

    // Query Edit ke Database
    if (isset($_POST['update'])) {
        $judul_carr = escape($_POST['judul_carr']);
        $isi_carr = escape($_POST['isi_carr']);

        $gambar_carr = $_FILES['gambar_carr']['name'];
        $gambar_carr_tmp = $_FILES['gambar_carr']['tmp_name'];

        move_uploaded_file($gambar_carr_tmp, "../assets/images/slideshow/$gambar_carr");

        // Jika gambar nya kosong
        if (empty($gambar_carr)) {
            $query = query("SELECT * FROM carousel WHERE id_carr='$id_carr'");
            confirmQuery($query);
            $result = mysqli_fetch_array($query);
            $gambar_carr = $result['gambar_carr'];
        }

        $query = query("UPDATE carousel SET gambar_carr='$gambar_carr', judul_carr='$judul_carr', isi_carr='$isi_carr' WHERE id_carr='$id_carr' ");
        if ($query) {
            redirect('slideshow.php');
        }
    }
}
?>

<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Slideshow</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Gambar Slideshow</label>
                            <input type="file" name="gambar_carr" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Judul Slideshow</label>
                            <input type="text" name="judul_carr" class="form-control" value="<?= $result['judul_carr'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Isi Slideshow</label>
                            <input type="text" name="isi_carr" class="form-control" value="<?= $result['isi_carr'] ?>">
                        </div>
                        <div class="form-group card-footer">
                            <button type="submit" name="update" class="btn btn-warning">Udpdate Data</button>
                            <a href="slideshow.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>