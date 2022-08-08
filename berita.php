<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row">
            <h4 class="text-center pt-5">Berita Terbaru</h4>
        </div>
        <div class="row">
                    <?php
                    // MEMBUAT PAGINATION
                    $per_page = 6;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = '';
                    }

                    if ($page == '' || $page == 1) {
                        $page_1 = 0;
                    } else {
                        $page_1 = ($page * $per_page) - $per_page;
                    }

                    $berita_count_query = query("SELECT * FROM berita");
                    // $result = mysqli_fetch_array($query);
                    $count = mysqli_num_rows($berita_count_query);

                    if ($count < 1) {
                        echo '<h1>NO POST DATA</h1>';
                    } else {
                        $count = ceil($count / $per_page);

                        $query = query("SELECT * FROM berita ORDER BY berita_date DESC
                                        LIMIT $page_1, $per_page");
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                
                                $berita_title = $row['berita_title'];
                                $berita_description = $row['berita_description'];
                                $berita_date = $row['berita_date'];
                                $id_berita = $row['id_berita'];
                                $berita_image = $row['berita_image'];
                                $berita_author = $row['berita_author'];
                                
                            // Jika gambar ada, maka tampilkan, jika tidak maka ambil gambar melalui link
                            if ($berita_image) {
                                $dir = "assets/images/berita/" . $berita_image;
                            } else {
                                $dir = "https://via.placeholder.com/500x300";
                            }
                    ?>
                    <!-- Informasi/Berita -->
                    <div class="col-md-4">
                        <div class="card my-3 border-0 shadow-lg">
                            <a href="berita_detail.php">
                                <img src="<?= $dir ?>" class="card-img-top" alt="<?= $dir ?>">
                            </a>
                            <div class="card-body">
                                <span class="fs-6 fw-lighter text-secondary">Oleh: <?= $berita_author ?> | <?= $berita_date ?></span>
                                <a href="berita_detail.php" style="text-decoration: none; color: black;">
                                    <h5 class="card-title mt-2"><?= $berita_title ?></h5>
                                </a>
                                <p class="card-text"><?= substr($berita_description, 0, 100) ?> 
                                <a href="berita_detail.php?id_berita=<?= $id_berita ?>"> Read More</a>
                                </p>
                            </div>
                        </div>
                        <!-- END Informasi/Berita -->
                    </div>
                    <?php }
                        } else {
                            echo '<div class="alert alert-danger" role="alert">
                                    Belum ada Data
                                </div>';
                        }
                    } ?>
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                for ($i = 1; $i <= $count; $i++) {
                    if ($i == $page) {
                        echo "<li class='page-item active'><a class='page-link' href='berita.php?page=$i'>$i</a></li>";
                    } else {
                        echo "<li class='page-item'><a class='page-link' href='berita.php?page=$i'>$i</a></li>";
                    }
                }
                ?>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
</main>
<?php include 'includes/footer.php' ?>