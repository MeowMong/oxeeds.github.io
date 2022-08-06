<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<?php
// GET OP
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// Visi

// End of Visi

// Misi
$id_misi    = "";
$isi_misi   = "";
// End of Misi
?>

<!-- Main Content -->
<main>
    <!-- Header / Judul -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p class="fs-4 text-center pt-5 fw-lighter">PROFIL</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="fs-1 text-center fw-bold">SEKOLAH</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <!-- Kosongkan -->
                </div>
                <div class="col-sm">
                    <hr class="my-1">
                </div>
                <div class="col-sm">
                    <!-- Kosongkan -->
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Header / Judul -->

    <!-- Visi & Misi -->
    <section id="profil-Visi">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm p-2">
                    <h2 class="fs-2 text-center fw-semibold">Visi</h2>
                    <div class="row">
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                        <div class="col-sm">
                            <hr class="mt-1 mb-5">
                        </div>
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <?php
                            $query = query("SELECT * FROM visi");
                            confirmQuery($query);
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <p class="text-center fs-5"><?= $row['isi_visi'] ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h2 class="fs-2 text-center fw-semibold">Misi</h2>
                    <div class="row">
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                        <div class="col-sm">
                            <hr class="mt-1 mb-5">
                        </div>
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <?php
                            $query   = query("SELECT * FROM deskripsi_misi");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <p class="lh-lg" style="text-align: justify;">
                                    <?= $row['isi_deskripsi_misi'] ?>
                                </p>
                            <?php
                            }
                            $query   = query("SELECT * FROM misi");
                            $index  = 1;
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <th class="lh-lg"><?= $index++ ?>. </th>
                                    <td class="lh-lg"><?= $row['isi_misi'] ?><br></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Visi & Misi -->

    <!-- Tujuan -->
    <section id="profil-Tujuan">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="fs-2 text-center fw-semibold">Tujuan Sekolah</h2>
                    <div class="row">
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                        <div class="col-sm">
                            <hr class="mt-1 mb-5">
                        </div>
                        <div class="col-sm">
                            <!-- Kosongkan -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <?php
                            $query = query("SELECT * FROM deskripsi_tujuan");
                            confirmQuery($query);
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <p class="lh-lg" style="text-align: justify;">
                                    <?= $row['isi_deskripsi_tujuan'] ?>
                                </p>
                            <?php
                            }
                            $query = query("SELECT * FROM tujuan");
                            confirmQuery($query);
                            $index = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <th class="lh-lg"><?= $index++ ?>. </th>
                                    <td class="lh-lg"><?= $row['isi_tujuan'] ?><br></td>
                                </tr>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Tujuan -->

    <hr class="container my-5">

    <!-- Sejarah -->
    <section id="profil-Sejarah">
        <div class="bg-success text-white">
            <div class="container">
                <div class="row pt-5">
                    <div class="col">
                        <h2 class="fs-2 text-left fw-semibold">Sejarah</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="mt-1 mb-5">
                    </div>
                </div>
                <?php
                $query = query("SELECT * FROM sejarah_sekolah WHERE id_sejarah_sekolah='1'");
                confirmQuery($query);
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <p class="lh-lg" style="text-align: justify;">
                                <?= $row['deskripsi_sejarah_sekolah'] ?>
                            </p>
                        </div>
                        <div class="col-sm-2 col-md-4">
                            <div class="card text-bg-dark mx-2 my-2">
                                <img src="assets/images/sejarah_sekolah/<?= $row['gambar_sejarah_sekolah'] ?>" class="card-img" alt="<?= $row['gambar_sejarah_sekolah'] ?>">
                                <div class="card-img-overlay">
                                    <!-- <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $query = query("SELECT * FROM sejarah_sekolah WHERE id_sejarah_sekolah='2'");
                confirmQuery($query);
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="row mt-5">
                        <div class="col-sm-2 col-md-4">
                            <div class="card text-bg-dark mx-2 my-2">
                                <img src="assets/images/sejarah_sekolah/<?= $row['gambar_sejarah_sekolah'] ?>" class="card-img" alt="<?= $row['gambar_sejarah_sekolah'] ?>">
                                <div class="card-img-overlay">
                                    <!-- <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-md-8">
                            <p class="lh-lg" style="text-align: justify;">
                                <?= $row['deskripsi_sejarah_sekolah'] ?>
                            </p>
                        </div>
                    </div>
                <?php
                }
                $query = query("SELECT * FROM sejarah_sekolah WHERE id_sejarah_sekolah='3'");
                confirmQuery($query);
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="row my-5 pb-5">
                        <div class="col-sm">
                            <p class="lh-lg text-center">
                                <?= $row['deskripsi_sejarah_sekolah'] ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Akhir dari Sejarah -->

    <!-- Struktur Organisasi -->
    <hr class="my-5 container">
    <section id="profil-Struktur">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="fs-2 text-left fw-semibold">Struktur Organisasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="mt-1 mb-5">
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-sm-2 col-md-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-sm-5 p-3 d-flex align-items-center justify-content-center">
                                <img src="assets/images/TWH.png" style="height: 80px;" alt="">
                            </div>
                            <div class="col-sm-7 d-flex align-items-center justify-content-center">
                                <p class="fs-5 fw-semibold text-center card-title">Dinas Pendidikan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-sm-5 p-3 d-flex align-items-center justify-content-center">
                                <img src="assets/images/TWH.png" style="height: 80px;" alt="">
                            </div>
                            <div class="col-sm-7 d-flex align-items-center justify-content-center">
                                <p class="fs-5 fw-semibold text-center card-title">SDN 1 Purwokerto Kulon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <!-- Kosongkan -->
                </div>
            </div>

            <div class="mt-3 row d-flex align-items-center">
                <div class="col-sm-2 col-md-4">
                    <!-- Kosongkan -->
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="card p-2">
                        <div class="row">
                            <?php
                            $query = query("SELECT * FROM sambutan INNER JOIN guru_karyawan WHERE id_guru_karyawan='1' ");
                            confirmQuery($query);
                            $index = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <div class="col-sm-5 p-3 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/sambutan/<?= $row['gambar_sambutan'] ?>" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                                </div>
                                <div class="col-sm-7 p-3 align-items-center">
                                    <div class="row">
                                        <div class="col">
                                            <p class="fs-5 fw-semibold card-title">Kepala Sekolah</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <blockquote class="blockquote">
                                                <p class="card-text blockquote" style="font-size: medium;"><?= $row['name_sambutan'] ?></p>
                                                <footer class="card-text"><small class="text-muted text-left blockquote-footer" style="font-size: small;"><?= 'NIP : ' . $row['nip'] ?></small></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <!-- Kosongkan -->
                </div>
            </div>
            <div class="mt-3 row d-flex align-items-center">
                <div class="col-sm">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Posisi Utama</th>
                                <th>Posisi Lainnya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = query("SELECT * FROM guru_karyawan");
                            confirmQuery($query);
                            $index = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td class="text-center"><?= $index++ ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['nip'] ?></td>
                                    <td><?= $row['posisi'] ?></td>
                                    <td><?= $row['posisi_lainnya'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-5 container">
    <!-- Akhir dari Struktur Organisasi -->

    <!-- Guru & Pegawai -->
    <section id="profil-Data">
        <div class="bg-success py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-left text-white fw-semibold">Guru & Pegawai</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <hr class="my-3">
                    </div>
                </div>

                <!-- Guru 1 -->
                <div class="row d-flex justify-content-between">
                    <?php
                    $query = query("SELECT * FROM guru_karyawan");
                    confirmQuery($query);
                    $index = 1;
                    while ($row = mysqli_fetch_assoc($query)) {
                        $gambar = $row['gambar'];
                        if ($gambar) {
                            $dir = "assets/images/guru_karyawan/$gambar";
                        } else {
                            $dir = "https://via.placeholder.com/600x729";
                        }
                    ?>
                        <div class="col-sm-2 col-md-3 p-2">
                            <div class="card" style="height: auto; max-width: 300px;">
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <img src="<?= $dir ?>" alt="<?= $dir ?>" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                        <p class="text-center fw-semibold"><?= $row['nama'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Akhir dari Guru & Pegawai -->
</main>

<?php include 'includes/footer.php' ?>