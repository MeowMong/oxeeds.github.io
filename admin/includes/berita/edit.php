<?php
// Perpindahan Halaman
if (isset($_GET['id_b'])) {
    $id_berita = $_GET['id_b'];
    $query = query("SELECT * FROM berita WHERE id_berita='$id_berita'");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);
    $berita_category_id = $result['berita_category_id'];
}

// Jika Klik Button
if (isset($_POST['update_artikel'])) {
    $id_berita = $_GET['id_b'];
    $berita_category_id = escape($_POST['berita_category_id']);
    $berita_title = escape($_POST['berita_title']);
    $berita_description = escape($_POST['berita_description']);

    $berita_image = $_FILES['berita_image']['name'];
    $berita_image_tmp = $_FILES['berita_image']['tmp_name'];

    move_uploaded_file($berita_image_tmp, "../assets/images/berita/$berita_image");

    // Jika gambar nya kosong
    if (empty($berita_image)) {
        $query = query("SELECT * FROM berita WHERE id_berita='$id_berita'");
        confirmQuery($query);
        $result = mysqli_fetch_array($query);
        $berita_image = $result['berita_image'];
    }

    // Query Edit
    $query = query("UPDATE berita SET berita.berita_category_id='$berita_category_id',
                                berita.berita_title='$berita_title',
                                berita.berita_image='$berita_image',
                                berita.berita_description='$berita_description'
                                WHERE berita.id_berita='$id_berita'");
    confirmQuery($query);
    redirect('berita.php');
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Berita</strong></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Kategori Berita</label>
                            <input type="text" name="berita_category_id" class="form-control" value="<?php echo $result['berita_category_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="berita_title" class="form-control" value="<?php echo $result['berita_title'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gambar Berita</label>
                            <input type="file" name="berita_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="berita_description" class="form-control" cols="30" rows="10"><?php echo $result['berita_description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update_artikel" class="btn btn-warning btn-block">Update Berita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>