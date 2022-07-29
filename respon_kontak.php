<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<?php
$query = query("SELECT * FROM kontak_sekolah");
confirmQuery($query);
$result = mysqli_fetch_assoc($query);
?>

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h3 class="fw-semibold">SDN 1 Purwokerto Kulon</h3>
                <hr>
                <p class="fw-light" style="text-align: justify">“Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri”</p>
                <div class="row">
                    <div class="col">
                        <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            Alamat</p>
                    </div>
                    <div class="col-9">
                        <p style="text-align: left"><?= $result['alamat_sekolah'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> Telepon</p>
                    </div>
                    <div class="col-9">
                        <p style="text-align: left"><?= $result['no_telp_sekolah'] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg> Email</p>
                    </div>
                    <div class="col-9">
                        <p style="text-align: left"><?= $result['email_sekolah'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5" style="text-align: right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.105088111584!2d109.23929456977537!3d-7.43465099999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7de6794df0fd32f5!2sSD%20NEGERI%201%20PURWOKERTO%20KULON!5e0!3m2!1sid!2sid!4v1658986264951!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
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

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="js/jquery-3.6.0.min.js"></script>