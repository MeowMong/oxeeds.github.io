<?php
$id_kontak_sekolah = $_GET['id_kontak_sekolah'];
if (isset($_GET['id_kontak_sekolah'])) {
    $query = query("SELECT * FROM kontak_sekolah WHERE id_kontak_sekolah='$id_kontak_sekolah' ");
    confirmQuery($query);
    $result = mysqli_fetch_assoc($query);

    // Query Edit ke Database
    if (isset($_POST['update_kontak_sekolah'])) {
        $no_telp_sekolah    = $_POST['no_telp_sekolah'];
        $email_sekolah      = $_POST['email_sekolah'];
        $alamat_sekolah     = $_POST['alamat_sekolah'];
        $facebook_sekolah   = $_POST['facebook_sekolah'];
        $instagram_sekolah  = $_POST['instagram_sekolah'];
        $youtube_sekolah    = $_POST['youtube_sekolah'];

        $query = query("UPDATE kontak_sekolah SET no_telp_sekolah='$no_telp_sekolah',
                                                email_sekolah='$email_sekolah',
                                                alamat_sekolah='$alamat_sekolah',
                                                facebook_sekolah='$facebook_sekolah',
                                                instagram_sekolah='$instagram_sekolah',
                                                youtube_sekolah='$youtube_sekolah'
                                                WHERE id_kontak_sekolah='$id_kontak_sekolah' ");
        if ($query) {
            redirect('kontak_sekolah.php');
        }
    }
}
?>


<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Update Kontak dan Alamat Sekolah</strong></h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_telp_sekolah">No Handphone Sekolah</label>
                                <input type="text" class="form-control" id="no_telp_sekolah" name="no_telp_sekolah" value="<?= $result['no_telp_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email_sekolah">Email Sekolah</label>
                                <input type="email" class="form-control" id="email_sekolah" name="email_sekolah" value="<?= $result['email_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat_sekolah">Alamat Sekolah</label>
                                <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?= $result['alamat_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="facebook_sekolah">Facebook Sekolah</label>
                                <input type="text" class="form-control" id="facebook_sekolah" name="facebook_sekolah" value="<?= $result['facebook_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="instagram_sekolah">Instagram Sekolah</label>
                                <input type="text" class="form-control" id="instagram_sekolah" name="instagram_sekolah" value="<?= $result['instagram_sekolah'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="youtube_sekolah">Youtube Sekolah</label>
                                <input type="text" class="form-control" id="youtube_sekolah" name="youtube_sekolah" value="<?= $result['youtube_sekolah'] ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="update_kontak_sekolah" class="btn btn-warning btn-block">Update Kontak dan Alamat Sekolah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>