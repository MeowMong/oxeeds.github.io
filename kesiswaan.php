<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
<?php
$qry_prestasi = mysqli_query($koneksi, "SELECT * FROM prestasi");
$qry_prestasi2 = mysqli_query($koneksi, "SELECT * FROM prestasi");
?>

<!-- Main Content -->
<main>
    <!-- Header / Judul -->
    <section id="kesiswaan-Judul">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p class="fs-4 text-center pt-5 fw-lighter">KESISWAAN</p>
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

    <!-- Tata Tertib -->
    <section id="kesiswaan-Tatatertib">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm p-2">
                    <div class="row pt-5">
                        <div class="col">
                            <h2 class="fs-2 text-left fw-semibold">Tata Tertib</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <hr class="mt-1 mb-5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm pe-5">
                            <p class="lh-lg" style="text-align: justify;"><b>Sekolah Dasar Negeri 1 Purwokerto Kulon</b> memiliki tata tertib yang harus dipatuhi oleh para peserta didik, yaitu sebagai berikut :</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row pt-5">
                        <div class="col">
                            <h2 class="fs-2 text-left text-transparent">-</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <hr class="mt-1 mb-5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <?php
                            $query   = query("SELECT * FROM tatib_sekolah");
                            $index  = 1;
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <th class="lh-lg"><?= $index++ ?>. </th>
                                    <td class="lh-lg"><?= $row['poin_tatib_sekolah'] ?><br></td>
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
    <!-- Akhir dari Tata Tertib -->

    <!-- Kesiswaan -->
    <section id="kesiswaan-Kesiswaan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Data Siswa</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="mt-1 mb-5">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-md-5">
                    <?php
                        $query = query("SELECT * FROM siswa");
                        confirmQuery($query);
                        while ($row = mysqli_fetch_assoc($query)) :
                        ?>
                    <p class="lh-lg" style="text-align: justify;">Pada tahun ajaran <?= $row['tahun_ajaran_siswa'] ?>, <b>SDN 1 Purwokerto Kulon</b> memiliki banyak siswa laki-laki dan perempuan yaitu :</p>
                    <div class="row text-center">
                        <div class="col-sm">
                            <p class="fw-semibold fs-5">Laki-Laki</p>
                        </div>
                        <div class="col-sm">
                            <p class="fw-semibold fs-5">Perempuan</p>
                        </div>
                    </div>
                    <div class="row text-center">
                            <div class="col-sm">
                                <p class="fw-reguler"><?= $row['jumlah_siswa_laki'] ?> Siswa</p>
                            </div>
                            <div class="col-sm">
                                <p class="fw-reguler"><?= $row['jumlah_siswa_perempuan'] ?> Siswi</p>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
                <div class="col">
                    <!-- Kosongkan -->
                </div>
                <div class="col-sm-2 col-md-5">
                    <p class="lh-lg" style="text-align: justify;">Berikut merupakan tabel data Siswa SDN 1 Purwokerto Kulon</p>
                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>Tahun Pelajaran</th>
                                    <th>Jumlah Lulusan</th>
                                    <th>Jumlah Melanjutkan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = query("SELECT * FROM alumni");
                                confirmQuery($query);
                                while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                    <tr class="text-center">
                                        <td><?= $row['tahun_pelajaran'] ?></td>
                                        <td><?= $row['jumlah_lulusan'] ?></td>
                                        <td><?= $row['jumlah_lanjut'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Kesiswaan -->

    <!-- Program & Ekstrakurikuler-->
    <!-- <section id="kesiswaan-Program">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Program</h2>
                </div>
                <div class="col">
                    <h2 class="text-left fw-semibold pt-5">Ekstrakurikuler</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <hr class="mt-1 mb-5">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <hr class="mt-1 mb-5">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-md-6">
                    <ul>
                        <li>Program1</li>
                        <li>Program1</li>
                        <li>Program1</li>
                        <li>Program1</li>
                    </ul>
                </div>
                <div class="col-sm-2 col-md-6">
                    <ul>
                        <li>Program1</li>
                        <li>Program1</li>
                        <li>Program1</li>
                        <li>Program1</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Akhir dari Program -->

    <!-- Prestasi -->
    <section id="kesiswaan-Prestasi">
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
                <?php while ($data = mysqli_fetch_assoc($qry_prestasi)) : ?>
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
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

    <?php while ($data = mysqli_fetch_assoc($qry_prestasi2)) : ?>
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
    <!-- Akhir dari Prestasi -->
</main>
<?php include 'includes/footer.php' ?>