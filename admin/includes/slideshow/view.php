<?php

// Menghapus Data
if (isset($_GET['delete'])) {
    $id_carr = $_GET['delete'];
    if ($id_carr) {
        $query = query("DELETE FROM carousel WHERE id_carr='$id_carr' ");
        confirmQuery($query);
        if ($query) {
            $sukses = "BERHASIL Menghapus Data!";
        }
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Slideshow</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header">
                    <h3>List Slideshow</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Gambar Slideshow</th>
                                <th class="text-center">Judul Slideshow</th>
                                <th class="text-center">Isi Slideshow</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = query("SELECT * FROM carousel");
                            confirmQuery($query);
                            $index  = 1;
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $index++ ?></td>
                                    <td><img src="../img/<?= $row['gambar_carr'] ?>" width="300"></td>
                                    <td><?= $row['judul_carr'] ?></td>
                                    <td><?= $row['isi_carr'] ?></td>
                                    <td class="text-center">
                                        <a href="slideshow.php?page=edit&id_carr=<?= $row['id_carr'] ?>" class="btn btn-warning mt-2">Update</a>
                                        <a href="slideshow.php?delete=<?= $row['id_carr'] ?>" class="btn btn-danger mt-2" onclick="return confirm('Ingin Menghapus Data ?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>