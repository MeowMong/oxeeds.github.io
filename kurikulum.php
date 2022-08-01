<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<!-- Main Content -->
<main>
    <!-- Kurikulum -->
    <section id="kurikulum-Kurikulum">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="fs-2 text-center fw-semibold">Kurikulum Sekolah</h2>
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
                                $query = query("SELECT * FROM kurikulum_sekolah");
                                confirmQuery($query);
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <p class="lh-lg fs-5 text-center">
                                <?= $row['deskripsi_kurikulum_sekolah'] ?>
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Kurikulum -->

    <!-- Program -->
    <section id="kurikulum-Program">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h2 class="fs-2 text-left fw-semibold">Program</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <hr class="mt-1 mb-5">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="lh-lg fs-5 text" style="text-align: justify;">
                        Seiringan dengan berjalannya Kurikulum tersebut, <b>Sekolah Dasar Negeri 1 Purwokerto Kulon</b> memiliki program-program yang dapat diikuti para peserta didik, yaitu sebagai berikut :
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Olimpiade MIPA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Pramuka Siaga</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Lomba Kompetensi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Pramuka Penggalang Putra & Putri</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Kerohanian</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Kesenian</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Atletik</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="assets/images/galeri/17.jpg" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold">Dokter Kecil / PMR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir dari Program -->
</main>
<?php include 'includes/footer.php' ?>