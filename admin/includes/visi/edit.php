<?php
// Jika Klik btn update yang ada pada tabel list kategori, 
// maka akan menampilkan nama dari kategory tersebut di 
// form edit yang ada di dalam tabel Form Tambah Kategory
// Global $id_carr
$id_visi = $_GET['id_visi'];
if (isset($_GET['id_visi'])) {
    $query = query("SELECT * FROM visi WHERE id_visi='$id_visi' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update'])) {
        $judul_carr = escape($_POST['judul_carr']);
        $isi_visi = escape($_POST['isi_visi']);

        $query = query("UPDATE visi SET isi_visi='$isi_visi' WHERE id_visi='$id_visi' ");
        if ($query) {
            redirect('visi.php');
        }
    }
}
?>

<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center">Update Slideshow</h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Isi Slideshow</label>
                            <input type="text" name="isi_visi" class="form-control" value="<?= $result['isi_visi'] ?>">
                        </div>
                        <div class="form-group card-footer">
                            <button type="submit" name="update" class="btn btn-warning btn-block">Udpdate Slideshow</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>