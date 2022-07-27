<?php include 'includes/admin_header.php' ?>
<?php include 'includes/admin_navigation.php' ?>

<?php
    // Membuat penamaan dalam Profil menjadi Dinamis ketiga login 
    $id_admin = $_SESSION['id_admin'];

    // Menampilkan data dari database
    $query = query("SELECT * FROM admins WHERE id_admin='$id_admin' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);
    $admin_image = $result['admin_image'];

    // Jika gambar tidak kosong, maka img akan diambil, jika kosong, maka img akan diambil berdasarkan link
    if (!empty($admin_image)) {
        $userImage = "../assets/images/admin/" . $admin_image;
    } else {
        $userImage = "https://via.placeholder.com/550x300";
    }

    // Aktivasi btn Update Profile
    if (isset($_POST['update_profile'])) {
        $email_admin = escape($_POST['email_admin']);
        $password = escape($_POST['password']);
        // Membuat variable enksripsi password

        $admin_image = $_FILES['admin_image']['name'];
        $admin_image_tmp = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($admin_image_tmp, "../assets/images/admin/" . $admin_image);

        if (empty($admin_image)) {
            $admin_image = $result['admin_image'];
        }

        if (empty($password)) {
            $password = $result['password'];
        }

        $query = query("UPDATE admins SET admin_image='$admin_image',
                                            email_admin='$email_admin',
                                            password='$password' 
                                            WHERE id_admin='$id_admin' ");
        confirmQuery($query);
        redirect('profile.php');
    }
?>

<!-- Membuat tampilan img agar lebih rapi -->
<style>
    #profile-img {
        width: 512px;
        height: 512px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">My Profile</h1>
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <img src="<?= $userImage ?>" id="profile-img" class="img-fluid img-thumbnail mx-auto d-block rounded-circle">
                            <div class="col-md-3 m-auto">
                                <input type="file" class="form-control" name="admin_image">
                            </div>
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email_admin" name="email_admin" class="form-control" value="<?= $result['email_admin'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $result['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger btn-block" name="update_profile" type="submit">Update Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/admin_footer.php' ?>