<?php
// Respon dari view.php
if (isset($_GET['u_id'])) {
    $id_user = $_GET['u_id'];

    $query = query("SELECT * FROM users WHERE id_user='$id_user' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);
    $user_image = $result['user_image'];
    $user_status = $result['user_status'];

    // Jika user_image tidak kosong, maka akan menampilkan user_image yang sudah ada
    if (!empty($user_image)) {
        $userImage = "../img/" . $user_image;
    } else {
        $userImage = "https://via.placeholder.com/550x300";
    }

    // Activasi Update
    if (isset($_POST['update_user'])) {
        $first_name = escape($_POST['first_name']);
        $last_name = escape($_POST['last_name']);
        $email = escape($_POST['email']);
        $username = escape($_POST['username']);
        $password = escape($_POST['password']);

        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp = $_FILES['user_image']['tmp_name'];

        move_uploaded_file($user_image_tmp, "../img/" . $user_image);

        // Jika user_image kosong, maka $user_image kita akan mengambil dari database
        if (empty($user_image)) {
            $user_image = $result['user_image'];
        }

        // Jika password kosong, maka $password kita akan mengambil dari database, agar didatabase tidak hilang saat meng-update users
        if (empty($password)) {
            $password = $result['password'];
        }

        $query = query("UPDATE users SET user_image='$user_image',
                            first_name='$first_name',
                            last_name='$last_name',
                            email='$email',
                            username='$username',
                            password='$password'
                            WHERE id_user='$id_user' ");
        confirmQuery($query);
        redirect('users.php');
    }

    // Query btn Activated User dan Pending User
    if(isset($_POST['active'])){
        $query = query("UPDATE users SET user_status='activated' WHERE id_user='$id_user' ");
        confirmQuery($query);
        redirect('users.php');
    }

    if (isset($_POST['pending'])) {
        $query = query("UPDATE users SET user_status='pending' WHERE id_user='$id_user' ");
        confirmQuery($query);
        redirect('users.php');
    }
}
?>

<style>
    #profile-img {
        width: 520px;
        height: 520px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Form Edit User</h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">

                    <form method="post">
                        <!-- Logic Button jika status pending maka akan menampilkan btn Activated User
                        Jika tidak maka akan menampilkan btn Pending User -->
                        <?php if ($user_status == 'pending') : ?>
                            <button class="btn btn-outline-primary" type="submit" name="active">Activated User</button>
                        <?php else : ?>
                            <button class="btn btn-outline-danger" type="submit" name="pending">Pending User</button>
                        <?php endif; ?>
                    </form>

                    <form method=" post" enctype="multipart/form-data">
                        <div class="form-group">
                            <img src="<?= $userImage ?>" class="rounded-circle img-fluid img-thumbnail mx-auto d-block" id="profile-img">
                            <div class="col-md-3 m-auto">
                                <input type="file" class="form-control" name="user_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?= $result['first_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="<?= $result['last_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $result['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $result['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>User Status</label>
                            <input type="text" class="form-control" value="<?= $result['user_status'] ?>" readonly>
                        </div>
                        <div class=" form-group">
                            <label>Join Date</label>
                            <input type="text" class="form-control" value="<?= $result['user_date'] ?>" readonly>
                        </div>
                        <div class=" form-group">
                            <button name="update_user" type="submit" class="btn btn-danger btn-block">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>