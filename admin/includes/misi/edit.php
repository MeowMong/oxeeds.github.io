<?php
// Jika Klik btn update yang ada pada tabel list kategori, 
// maka akan menampilkan nama dari kategory tersebut di 
// form edit yang ada di dalam tabel Form Tambah Kategory
// Global $id_carr
$id_carr = $_GET['id_carr'];
if (isset($_GET['id_carr'])) {
    $query = query("SELECT * FROM carousel WHERE id_carr='$id_carr' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);
    $gambar_carr = $result['gambar_carr'];

    // Jika user_image tidak kosong, maka akan menampilkan user_image yang sudah ada
    if (!empty($user_image)) {
        $userImage = "../img/" . $user_image;
    } else {
        $userImage = "https://via.placeholder.com/550x300";
    }

    // Query Edit ke Database
    if (isset($_POST['update'])) {
        $judul_carr = escape($_POST['judul_carr']);
        $isi_carr = escape($_POST['isi_carr']);

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
            <h1 class="text-center">Update Slideshow</h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="isi_misi">Poin Misi</label>
                                <input type="text" class="form-control" id="isi_misi" name="isi_misi" placeholder="Masukkan Poin Misi">
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="simpan_misi" class="btn btn-primary btn-block">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>