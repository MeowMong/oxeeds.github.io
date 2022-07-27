<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><strong>Sambutan Kepala Sekolah</strong></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow lg">
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Isi Sambutan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = query("SELECT * FROM sambutan");
                                confirmQuery($query);
                                while($row = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?= $row['name_sambutan'] ?></td>
                                <td><?= $row['isi_sambutan'] ?></td>
                                <td>
                                    <a href="sambutan.php?page=edit&id_sambutan=<?= $row['id_sambutan'] ?>" class="btn btn-warning btn-block">Update</a>
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