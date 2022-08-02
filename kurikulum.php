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
                <?php 
                    $query = query("SELECT * FROM deskripsi_program_sekolah INNER JOIN program_sekolah");
                    confirmQuery($query);
                    $row = mysqli_fetch_assoc($query);
                ?>
                <div class="col-sm">
                    <p class="lh-lg fs-5 text" style="text-align: justify;">
                        <?= $row['deskripsi_program'] ?>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php 
                    $query = query("SELECT * FROM program_sekolah");
                    confirmQuery($query);
                    while($row = mysqli_fetch_assoc($query)){
                        $gambar_program_sekolah = $row['gambar_program_sekolah'];
                        if($gambar_program_sekolah){
                            $dir = "assets/images/program_sekolah/$gambar_program_sekolah";
                        } else {
                            $dir = "assets/images/program_sekolah/sample.jpg";
                        }
                ?>
                <!--  -->
                <div class="col-sm-2 col-md-3 p-2">
                    <div class="card" style="height: auto; max-width: 300px;">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <img src="<?= $dir ?>" class="card-img" style="height: auto; width: full;" alt="Guru & Staff">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center" style="height: 50px;">
                                <p class="text-center fw-semibold"><?= $row ['deskripsi_gambar_program_sekolah'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Akhir dari Program -->
</main>
<?php include 'includes/footer.php' ?>