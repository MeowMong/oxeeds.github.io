<?php
    if (isset($_GET['p_id'])) {
        $post_id = $_GET['p_id'];
        $query = query("SELECT * FROM posts WHERE id_post='$post_id'");
        confirmQuery($query);
        $result = mysqli_fetch_array($query);
        $post_category_id = $result['post_category_id'];
    }

    if(isset($_POST['update_artikel'])){
        $post_id = $_GET['p_id'];
        $post_category_id = escape($_POST['post_cateogry_id']);
        $post_title = escape($_POST['post_title']);
        $post_description = escape($_POST['post_description']);

        $post_image = $_FILES['post_image']['name'];
        $post_image_tmp = $_FILES['post_image']['tmp_name'];

        move_uploaded_file($post_image_tmp,"../img/$post_image");

        // Jika gambar nya kosong
        if(empty($post_image)){
            $query = query("SELECT * FROM posts WHERE id_post='$post_id'");
            confirmQuery($query);
            $result = mysqli_fetch_array($query);
            $post_image = $result['post_image'];
        }

        // Query Edit
        $query = query("UPDATE posts SET posts.post_category_id='$post_category_id',
                                posts.post_title='$post_title',
                                posts.post_image='$post_image',
                                posts.post_description='$post_description'
                                WHERE posts.id_post='$post_id'");
        confirmQuery($query);
        redirect('artikel.php');
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Form Edit Artikel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <select class="form-control" name="post_category_id">
                                <option>Pilih Kategori</option>
                                <?php
                                    $query = query("SELECT * FROM category");
                                    confirmQuery($query);
                                    while ($item = mysqli_fetch_array($query)) {
                                        $category_id = $item['id_category'];
                                ?>                                                                  <!-- Agar Option nya sama dengan judul category bagian view dengan saat yang diedit -->
                                    <option value="<?php echo $item['id_category'] ?>" <?php if($category_id == $post_category_id) : echo 'selected'; endif; ?> ><?php echo $item['category_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" name="post_title" class="form-control" value="<?php echo $result['post_title'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="post_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="post_description" class="form-control" cols="30" rows="10"><?php echo $result['post_description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update_artikel" class="btn btn-warning btn-block">Update Artikel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>