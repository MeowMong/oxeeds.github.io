<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<!-- Main Content -->
<main>
    <div class="container">
        <hr class="my-5">
        <div class="card text-black">
            <?php
            $query = query("SELECT * FROM kontak_sekolah");
            $result = mysqli_fetch_assoc($query);

            // CREATE
            if (isset($_POST['kirim_respon_kontak_sekolah'])) {
                $name_respon_kontak_sekolah = $_POST['name_respon_kontak_sekolah'];
                $kontak_perespon_kontak_sekolah = $_POST['kontak_perespon_kontak_sekolah'];
                $pesan_respon_kontak_sekolah = $_POST['pesan_respon_kontak_sekolah'];

                if ($name_respon_kontak_sekolah && $kontak_perespon_kontak_sekolah && $pesan_respon_kontak_sekolah) {
                    // Simpan data
                    $query   = query("INSERT INTO respon_kontak_sekolah(name_respon_kontak_sekolah, kontak_perespon_kontak_sekolah, pesan_respon_kontak_sekolah, tanggal_respon_kontak_sekolah) 
                                    VALUES ('$name_respon_kontak_sekolah', '$kontak_perespon_kontak_sekolah', '$pesan_respon_kontak_sekolah', now())");
                    confirmQuery($query);
                }
            }
            ?>
            <div class="card-body row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2>SDN 1 <br><strong>Purwokerto Kulon</strong></h2>
                        <p class="mb-5 fs-5 fw-light"><?= $result['alamat_sekolah'] ?></p>
                    </div>
                </div>
                <div class="col-7">
                    <form method="post">
                        <div class="form-group mb-4">
                            <input for="floatingInput" type="text" class="form-control" name="name_respon_kontak_sekolah" placeholder="Nama Anda">
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" name="kontak_perespon_kontak_sekolah" placeholder="E-Mail / Nomor Telepon">
                        </div>
                        <div class="form-group mb-4">
                            <textarea class="form-control" rows="2" name="pesan_respon_kontak_sekolah" style="height: 100px;" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-floating form-group mb-4">
                            <button type="submit" name="kirim_respon_kontak_sekolah" class="btn btn-primary">Kirim pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr class="my-5">
    </div>
</main>
<?php include 'includes/footer.php' ?>