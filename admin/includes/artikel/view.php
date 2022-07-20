<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List Artikel</h1>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="post_title" placeholder="Masukan judul artikel anda.....">
                            <span class="input-group-btn">
                                <button class="btn btn-dark" name="cariArtikel" type="submit">
                                    Cari Artikel
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['cariArtikel'])) {
        $post_title = escape($_POST['post_title']);

        $query = query("SELECT * FROM posts 
                        INNER JOIN category ON category.id_category = posts.post_category_id
                    WHERE posts.post_title LIKE '%post_title%' ");
        echo '<div class="row">
                    <div class="col-md-12">
                        <a href="artikel.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>';
        echo '<div class="row">';
            while ($row = mysqli_fetch_array($query)) {
    ?>
            <!-- Blog Entries Column -->
            <div class="col-md-4 mb-5">
                <!-- Blog Post -->
                <div class="card mb-4 border-0 shadow-lg">
                    <img class="card-img-top" src="../img/<?php echo $row['post_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <span class="badge badge-primary"><?php echo $row['category_name'] ?></span>
                        <h2 class="card-title"><?php echo $row['post_title'] ?></h2>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a target="blank" class="dropdown-item" href="../post_artikel.php?read_more=<?php echo $row['id_post'] ?>">View Artikel</a>
                                <a class="dropdown-item" href="artikel.php?delete=<?php echo $row['id_post'] ?>">Delete Artikel</a>
                                <a class="dropdown-item" href="artikel.php?page=edit&p_id=<?php echo $row['id_post'] ?>">Edit Artikel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Posted on <?php echo $row['post_date'] ?> by
                    <a href="#">Start Bootstrap</a>
                </div>
            </div>
    <?php } echo '</div>';
        } else { ?>

        <div class="row">
            <?php
            $query = query("SELECT * FROM posts INNER JOIN category ON category.id_category=posts.post_category_id");
            confirmQuery($query);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <!-- Blog Entries Column -->
                <div class="col-md-4 mb-5">
                    <!-- Blog Post -->
                    <div class="card mb-4 border-0 shadow-lg">
                        <img class="card-img-top" src="../img/<?php echo $row['post_image'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-primary"><?php echo $row['category_name'] ?></span> / <span class="badge badge-info"><?php echo $row['post_status'] ?></span>
                            <h2 class="card-title"><?php echo $row['post_title'] ?></h2>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a target="blank" class="dropdown-item" href="../post_artikel.php?read_more=<?php echo $row['id_post'] ?>">View Artikel</a>
                                    <a class="dropdown-item" href="artikel.php?delete=<?php echo $row['id_post'] ?>">Delete Artikel</a>
                                    <a class="dropdown-item" href="artikel.php?page=edit&p_id=<?php echo $row['id_post'] ?>">Edit Artikel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php echo $row['post_date'] ?> by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

<?php
if (isset($_GET['delete'])) {
    $id_post = $_GET['delete'];
    $query = query("DELETE FROM posts WHERE posts.id_post='$id_post'");
    confirmQuery($query);
    redirect('artikel.php');
}
?>