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
                                <th class="text-center">Gambar Penyambut</th>
                                <th class="text-center">Nama Penyambut</th>
                                <th class="text-center">Isi Sambutan</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = query("SELECT * FROM sambutan");
                            confirmQuery($query);
                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><img src="../assets/images/sambutan/<?= $row['gambar_sambutan'] ?>" alt="<?= $row['gambar_sambutan'] ?>"></td>
                                    <td><?= $row['name_sambutan'] ?></td>
                                    <td><?= $row['isi_sambutan'] ?></td>
                                    <td><?= $row['tanggal_sambutan'] ?></td>
                                    <td>
                                        <a href="sambutan.php?page=edit&id_sambutan=<?= $row['id_sambutan'] ?>" class="btn btn-warning btn-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
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