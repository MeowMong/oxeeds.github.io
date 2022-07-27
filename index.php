<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>


<!-- Hero Section -->
<section id="hero" class="container h-100">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <?php
        $query   = query("SELECT * FROM carousel");
        confirmQuery($query);
        while ($row = mysqli_fetch_array($query)) {
            $gambar_carr    = $row['gambar_carr'];
            $judul_carr     = $row['judul_carr'];
            $isi_carr       = $row['isi_carr'];
        }
        ?>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/<?= $gambar_carr ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>SELAMAT DATANG DI <br />
                        <span class="fw-bold">SDN 1 PURWOKERTO KULON</span>
                    </h1>
                    <p><?= $isi_carr ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/<?= $gambar_carr ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $judul_carr ?></h5>
                    <p><?= $isi_carr ?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/<?= $gambar_carr ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $judul_carr ?></h5>
                    <p><?= $isi_carr ?></p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- Main -->
<main class="container">
    <hr class="my-5">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>

                <div id="ibu" class="col-md-10">
                    <?php
                    $sql2   = "SELECT * FROM sambutan";
                    $q2     = mysqli_query($koneksi, $sql2);
                    while ($r2 = mysqli_fetch_array($q2)) {
                        $id_sambutan    = $r2['id_sambutan'];
                        $nama_penyambut = $r2['nama'];
                        $status         = $r2['status'];
                        $isi_sambutan   = $r2['isi_sambutan'];
                        $tanggal_sambut = $r2['tanggal'];
                    }
                    ?>
                    <div class="card" style="max-width: 4000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="assets/images/ibu-Andjar.png" class="img-fluid rounded-start" alt="..." height="100">
                            </div>
                            <div class="col-md-8 text-dark">
                                <div class="card-body">
                                    <!-- <hr class="my-4"> -->
                                    <h4 class="card-title fw-bold my-3 mx-5">Sambutan Kepala Sekolah</h4>
                                    <blockquote class="blockquote">
                                        <p class="card-text mx-5 blockquote justify"><?= $isi_sambutan ?></p>
                                        <footer class="card-text mx-5"><small class="text-muted blockquote-footer"><?php echo $nama_penyambut ?></small></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CardBox Sambutan Kepala Sekolah -->

    <!-- Visi & Misi -->
    <hr class="my-5">
    <hr class="my-5">
    <section id="visi" class="content">
        <div id="visi">
            <h1 class="fw-bold">Visi :</h1>
            <p>Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri</p>
        </div>

        <div id="misi">
            <h1 class="fw-bold">Misi :</h1>
            <p class="justify-content">Untuk mencapai visi sebagai sekolah yang terdepan, terbaik, dan terpercaya, perlu dilakukan suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi Sekolah Dasar Negeri 1 Purwokerto Kulon yang dirumuskan berdasarkan visi sekolah, yaitu:</p>
            <?php
            $sql3   = "SELECT * FROM misi";
            $q3     = mysqli_query($koneksi, $sql3);
            $index3  = 1;
            while ($r3 = mysqli_fetch_array($q3)) {
                $id_misi    = $r3['id_misi'];
                $isi_misi   = $r3['isi_misi'];
            ?>
                <tr>
                    <th><?= $index3++ ?>. </th>
                    <td><?= $isi_misi ?><br></td>
                </tr>
            <?php
            }
            ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php' ?>