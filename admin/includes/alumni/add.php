<?php
if (isset($_POST['add_artikel'])) {
    $post_category_id = escape($_POST['post_category_id']);
    $post_title = escape($_POST['post_title']);
    $post_description = escape($_POST['post_description']);

    $post_image = $_FILES['post_image']['name'];
    $post_image_tmp = $_FILES['post_image']['tmp_name'];

    move_uploaded_file($post_image_tmp, "../img/$post_image");

    $query = query("INSERT INTO posts(post_category_id, post_title, post_image, post_description, post_date)
                        VALUES('$post_category_id','$post_title','$post_image','$post_description',now())");
    confirmQuery($query);
    redirect('sekolah.php');
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Form Tambah Artikel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <!-- Dibutuhkan enctype karena kita menginputkan file (gambar)-->
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <select class="form-control" name="post_category_id">
                                <option>Pilih Kategori</option>
                                <?php
                                $query = query("SELECT * FROM category");
                                confirmQuery($query);
                                while ($item = mysqli_fetch_assoc($query)) {
                                ?>
                                    <option value="<?php echo $item['id_category'] ?>"><?php echo $item['category_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Judul Artikel</label>
                            <input type="text" name="post_title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Gambar Artikel</label>
                            <input type="file" name="post_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="post_description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="add_artikel" class="btn btn-primary btn-block">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>