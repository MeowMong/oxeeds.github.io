<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">List Users</h1>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>User Position</th>
                    <th>User Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <!-- Menampilkan Data users ke dalam Table -->
                <?php
                $query = query("SELECT * FROM users");
                confirmQuery($query);
                while ($row = mysqli_fetch_array($query)) {
                    $fullname = $row['first_name'] . ' ' . $row['last_name'];
                    $position = $row['user_position'];
                    $status = $row['user_status'];
                ?>

                    <tr>
                        <td><?= $fullname ?></td>
                        <td><?= $position ?></td>
                        <td><?= $status ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a href="users.php?delete=<?= $row['id_user'] ?>" class="dropdown-item">Delete</a>
                                    <a href="users.php?page=edit&u_id=<?= $row['id_user'] ?>" class="dropdown-item">Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Activasi Delete -->
<?php 
    if(isset($_GET['delete'])){
        $id_user = $_GET['delete'];
        $query = query("DELETE FROM users WHERE id_user='$id_user' ");
        confirmQuery($query);
        redirect('users.php');
    }
?>