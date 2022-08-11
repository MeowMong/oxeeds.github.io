<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php';?>

<!-- Main Content -->
<main>
    <!-- Fasilitas Sekolah -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Fasilitas Sekolah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="my-3">
                </div>
            </div>
            <div class="row">
                <?php
                    $qry_fasilitas = query("SELECT * FROM fasilitas");
                    while($data = mysqli_fetch_assoc($qry_fasilitas)) : 
                    ?>
                <div class="col-sm-2 col-md-4">
                    <div class="card border-0 shadow-lg text-bg-dark mx-2 my-2">
                        <a href="#" role="button" data-bs-toggle="modal" data-bs-target="#fasilitas<?= $data['id_fasilitas'] ?>">
                        <img src="assets/images/berita/<?= $data['gambar_fasilitas'] ?>" class="card-img">
                        </a>
                        <!-- <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div> -->
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Akhir dari Fasilitas Sekolah -->

    <!-- Ekstrakurikuler -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Ekstrakurikuler</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="my-3">
                </div>
            </div>
            <div class="row">
                <?php
                    $qry_ekstrakulikuler = query("SELECT * FROM fasilitas");
                    while($data = mysqli_fetch_assoc($qry_ekstrakulikuler)) : 
                    ?>
                <div class="col-sm-2 col-md-4">
                    <div class="card border-0 shadow-lg text-bg-dark mx-2 my-2">
                        <a href="#" role="button" data-bs-toggle="modal" data-bs-target="#fasilitas<?= $data['id_fasilitas'] ?>">
                        <img src="assets/images/berita/<?= $data['gambar_fasilitas'] ?>" class="card-img">
                        </a>
                        <!-- <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div> -->
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Akhir dari Ekstrakurikuler -->

    <!-- Prestasi -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Prestasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="my-3">
                </div>
            </div>
            <div class="row">
                <?php
                    $qry_prestasi = query("SELECT * FROM prestasi");
                    while($data = mysqli_fetch_assoc($qry_prestasi)) :
                ?>
                <div class="col-sm-2 col-md-4">
                    <div class="card border-0 shadow-lg text-bg-dark mx-2 my-2">
                        <a href="#" role="button" data-bs-toggle="modal" data-bs-target="#prestasi<?= $data['id_prestasi'] ?>">
                        <img src="assets/images/prestasi/<?= $data['gambar_prestasi'] ?>" class="card-img">
                        </a>
                        <!-- <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div> -->
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Akhir dari Prestasi -->
    
</main>

    <?php
        $qry_fasilitas2 = query("SELECT * FROM fasilitas");
        while($data = mysqli_fetch_assoc($qry_fasilitas2)) : 
    ?>
    <!-- Modal -->
    <div class="modal fade" id="fasilitas<?= $data['id_fasilitas'] ?>" tabindex="-1" aria-labelledby="fasilitas<?= $data['id_fasilitas'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $data['nama_fasilitas'] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="assets/images/berita/<?= $data['gambar_fasilitas'] ?>" class="card-img">
            <p><?= $data['keterangan_fasilitas'] ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <?php endwhile; ?>

    <?php
        $qry_ekstrakulikuler2 = query("SELECT * FROM ekstrakulikuler");
        while($data = mysqli_fetch_assoc($qry_ekstrakulikuler2)) : 
    ?>
    <!-- Modal -->
    <div class="modal fade" id="ekstrakulikuler<?= $data['id_ekstrakulikuler'] ?>" tabindex="-1" aria-labelledby="ekstrakulikuler<?= $data['id_ekstrakulikuler'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $data['nama_ekstrakulikuler'] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="assets/images/ekstrakulikuler/<?= $data['gambar_ekstrakulikuler'] ?>" class="card-img">
            <p><?= $data['keterangan_fasilitas'] ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <?php endwhile; ?>

    <?php
        $qry_prestasi2 = query("SELECT * FROM prestasi");
        while($data = mysqli_fetch_assoc($qry_prestasi2)) : 
    ?>
    <!-- Modal -->
    <div class="modal fade" id="prestasi<?= $data['id_prestasi'] ?>" tabindex="-1" aria-labelledby="prestasi<?= $data['id_prestasi'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $data['nama_prestasi'] ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="assets/images/prestasi/<?= $data['gambar_prestasi'] ?>" class="card-img">
            <p>
                <span>
                    Tanggal: <?= date('d F Y', strtotime($data['tanggal_prestasi'])) ?>
                </span><br>
                <span>
                    Tingkat: <?= $data['tingkat_prestasi'] ?>
                </span><br>
                <span>
                    Nama Peraih: <?= $data['nama_peraih_prestasi'] ?>
                </span><br>
                <span>
                    Lokasi: <?= $data['lokasi_prestasi'] ?>
                </span><br>
                <span>
                    Keterangan: <?= $data['keterangan_prestasi'] ?>
                </span>
                </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
<?php endwhile; ?>
<?php include 'includes/footer.php' ?>
