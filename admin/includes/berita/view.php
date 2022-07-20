<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List Berita</h1>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="berita_title" placeholder="Masukan judul berita anda....." autofocus>
                            <span class="input-group-btn">
                                <button class="btn btn-dark" name="cariArtikel" type="submit">
                                    Cari Berita
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
        $berita_title = escape($_POST['berita_title']);

        $query = query("SELECT * FROM berita 
                        INNER JOIN category_berita ON category_berita.id_category_berita = berita.berita_category_id
                        WHERE berita.berita_title LIKE '%$berita_title%' OR
                        berita.berita_description LIKE '%$berita_title%' OR
                        berita.berita_author LIKE '%$berita_title%'");
        confirmQuery($query);
        echo '<div class="row">
                    <div class="col-md-12">
                        <a href="berita.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>';
        echo '<div class="row mt-5">';
            while ($row = mysqli_fetch_array($query)) {
    ?>
            <!-- Blog Entries Column -->
            <div class="col-md-4 mb-5">
                <!-- Blog Post -->
                <div class="card mb-4 border-0 shadow-lg">
                    <img class="card-img-top" src="../img/<?= $row['berita_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <span class="badge badge-primary"><?= $row['category_name'] ?></span> / <span><?= $row['berita_author'] ?></span>
                        <h2 class="card-title"><?= $row['berita_title'] ?></h2>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a target="blank" class="dropdown-item" href="../post_artikel.php?read_more=<?= $row['id_berita'] ?>">View Artikel</a>
                                <a class="dropdown-item" href="berita.php?delete=<?= $row['id_berita'] ?>">Delete Artikel</a>
                                <a class="dropdown-item" href="berita.php?page=edit&p_id=<?= $row['id_berita'] ?>">Edit Artikel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Posted on <?= $row['berita_date'] ?> by
                    <a href="#">Start Bootstrap</a>
                </div>
            </div>
        <?php }
        echo '</div>';
    } else { ?>
        <div class="row">
            <?php
            $query = query("SELECT * FROM berita INNER JOIN category_berita ON category_berita.id_category_berita=berita.berita_category_id");
            confirmQuery($query);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <!-- Blog Entries Column -->
                <div class="col-md-4 mb-5">
                    <!-- Blog Post -->
                    <div class="card mb-4 border-0 shadow-lg">
                        <img class="card-img-top" src="../img/<?= $row['berita_image'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <span class="badge badge-primary"><?= $row['category_name'] ?></span> / <span><?= $row['berita_author'] ?></span>
                            <h2 class="card-title"><?= $row['berita_title'] ?></h2>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a target="blank" class="dropdown-item" href="../post_artikel.php?read_more=<?= $row['id_berita'] ?>">View Artikel</a>
                                    <a class="dropdown-item" href="berita.php?delete=<?= $row['id_berita'] ?>">Delete Artikel</a>
                                    <a class="dropdown-item" href="berita.php?page=edit&id_b=<?= $row['id_berita'] ?>">Edit Artikel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?= $row['berita_date'] ?> by
                        <a href="#">Start Bootstrap</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

<?php
if (isset($_GET['delete'])) {
    $id_berita = $_GET['delete'];
    $query = query("DELETE FROM berita WHERE berita.id_berita='$id_berita'");
    confirmQuery($query);
    redirect('berita.php');
}
?>