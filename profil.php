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
                            <p class="text-center fs-5">"Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri"</p>
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
                            <p class="lh-lg" style="text-align: justify;">
                                Untuk mencapai visi sebagai sekolah yang terdepan, terbaik, dan terpercaya, perlu dilakukan suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi Sekolah Dasar Negeri 1 Purwokerto Kulon yang dirumuskan berdasarkan visi sekolah, yaitu :
                            </p>
                            <?php
                            $sql3   = "SELECT * FROM misi";
                            $q3     = mysqli_query($koneksi, $sql3);
                            $index3  = 1;
                            while ($r3 = mysqli_fetch_array($q3)) {
                                $id_misi    = $r3['id_misi'];
                                $isi_misi   = $r3['isi_misi'];
                            ?>
                                <tr>
                                    <th class="lh-lg"><?php echo $index3++ ?>. </th>
                                    <td class="lh-lg"><?php echo $isi_misi ?><br></td>
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
                            <p class="lh-lg" style="text-align: justify;">
                                Sesuai dengan visi misi sekolah, tujuan SD Negeri 1 Purwokerto Kulon adalah mengantarkan siswa untuk :
                            </p>
                            <ol>
                                <li>Mendidik dan membimbing peserta didik untuk menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.</li>
                                <li>Mendidik dan membimbing peserta didik menjadi manusia yang berakhlak mulia dan berbudi pekerti yang luhur.</li>
                                <li>Membimbing dan mendidik peserta didik menjadi manusia yang cerdas, terampil, dan berdaya guna.</li>
                                <li>Mendidik dan membimbing siswa menjadi manusia yang jujur, disiplin, mandiri dan bertanggung jawab.</li>
                                <li>Melaksanakan pembelajaran model saintifik sehingga tercipta belajar mengajar yang kreatif, efektif, inovatif, dan kondusif.</li>
                            </ol>
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
                <div class="row">
                    <div class="col-sm-10 col-md-8">
                        <p class="lh-lg" style="text-align: justify;">
                            Sebelum bernama <b>SDN 1 Purwokerto Kulon</b> dahulu bernama SD Purwokerto Kulon II berdasarkan Kutipan Surat Keputusan Gubernur Kepala Daerah Propinsi Jawa Tengah tanggal 14 Juli 1971 bahwa wilayah S.D.2 terletak di dalam wilayah P.S. Purwokerto II terhitung mulai tanggal 1 Januari 1970 diberikan hak PAKAI atas gedung/tanah halaman sekolah menurut keadaan yang sesungguhnya seperti tercantum pada daftar lampiran Keputusan Gubernur Kepala Daerah Propinsi Jawa Tengah tanggal 14 Juli 1971 No.SD/PDK/.17/1/1 bagi S.D.2 dalam wilayah Purwokerto II Kab.Banyumas.
                        </p>
                    </div>
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-2 col-md-4">
                        <div class="card text-bg-dark mx-2 my-2">
                            <img src="https://picsum.photos/300/200" class="card-img" alt="https://picsum.photos/300/200">
                            <div class="card-img-overlay">
                                <!-- <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">Last updated 3 mins ago</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-8">
                        <p class="lh-lg" style="text-align: justify;">
                            Berdasarkan Peraturan Bupati Banyumas Nomor 21 Tahun 2005 tentang penggabungan 173 Sekolah Dasar Negeri di Lingkungan Pemerintah Kabupaten Banyumas tanggal 07 Mei 2005 berlaku diundangkan yaitu Diundangkan di Purwokerto Pada tanggal 9 Mei 2005 ditandatangani oleh Sekretaris Daerah Kabupaten Banyumas Singgih Wiranto,S.H, NIP. 500 086 384 pada Berita Daerah Kabupaten Banyumas Nomor 11 Seri E.
                        </p>
                    </div>
                </div>
                <div class="row my-5 pb-5">
                    <div class="col-sm">
                        <p class="lh-lg text-center">
                            Sejak tanggal 9 Mei 2005 SD N 1 Purwokerto Kulon SD N 2 Purwokerto Kulon digabung menjadi satu dengan nama SD N 1 Purwokerto Kulon yang terletak di Jalan DI Panjaitan Seluas ∓ 2.852 meter persegi terletak di persil 114 klas D.III Jalan DI Panjaitan Kelurahan Purwokerto Kulon Kecamatan Purwokerto Selatan.
                        </p>
                    </div>
                </div>
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
                            <div class="col-sm-5 p-3 d-flex align-items-center justify-content-center">
                                <img src="assets/images/guru/rr.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
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
                                            <p class="card-text blockquote" style="font-size: medium;">Esti Andjar Arijandhini</p>
                                            <footer class="card-text"><small class="text-muted text-left blockquote-footer" style="font-size: small;">NIP. </small></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
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
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="text-center">Siti Supihnah, S.Pd</td>
                                <td class="text-center">19681026 199401 2 001</td>
                                <td class="text-center">Guru Kelas IV</td>
                                <td class="text-center">Koordinator Pramuka, Koordinator Olimpiade, Koordinator Paskibra</td>
                            </tr>
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="text-center">Siti Supihnah, S.Pd</td>
                                <td class="text-center">19681026 199401 2 001</td>
                                <td class="text-center">Guru Kelas IV</td>
                                <td class="text-center">Koordinator Pramuka</td>
                            </tr>
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="text-center">Siti Supihnah, S.Pd</td>
                                <td class="text-center">19681026 199401 2 001</td>
                                <td class="text-center">Guru Kelas IV</td>
                                <td class="text-center">Koordinator Pramuka</td>
                            </tr>
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
                    <div class="col-sm-2 col-md-3 p-2">
                        <div class="card" style="height: auto; max-width: 300px;">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <img src="assets/images/guru/rr.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                    <p class="text-center fw-semibold">1. RR. Esti Andjar Arijandhini</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guru 2 -->
                    <div class="col-sm-2 col-md-3 p-2">
                        <div class="card" style="height: auto; max-width: 300px;">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <img src="assets/images/guru/rr.jpg" class="card-img" style="height: auto; width: full;" alt="https://picsum.photos/300/200">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                    <p class="text-center fw-semibold">1. RR. Esti Andjar Arijandhini</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guru 3 -->
                    <div class="col-sm-2 col-md-3 p-2">
                        <div class="card" style="height: auto; max-width: 300px;">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <img src="assets/images/guru/rr.jpg" class="card-img" style="height: auto; width: full;" alt="https://picsum.photos/300/200">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                    <p class="text-center fw-semibold">1. RR. Esti Andjar Arijandhini</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guru 4 -->
                    <div class="col-sm-2 col-md-3 p-2">
                        <div class="card" style="height: auto; max-width: 300px;">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <img src="assets/images/guru/rr.jpg" class="card-img" style="height: auto; width: full;" alt="https://picsum.photos/300/200">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                    <p class="text-center fw-semibold">1. RR. Esti Andjar Arijandhini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Akhir dari Guru & Pegawai -->
</main>

<?php include 'includes/footer.php' ?>