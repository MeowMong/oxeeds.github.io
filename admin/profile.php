<?php include 'includes/admin_header.php' ?>
<?php include 'includes/admin_navigation.php' ?>

<?php
// Membuat penamaan dalam Profil menjadi Dinamis ketiga login 
$id_user = $_SESSION['id_user'];

// Menampilkan data dari database
$query = query("SELECT * FROM users WHERE id_user='$id_user' ");
confirmQuery($query);
$result = mysqli_fetch_array($query);
$user_image = $result['user_image'];    
// Jika img tidak kosong, maka img akan diambil, jika kosong, maka img akan diambil berdasarkan link
if (!empty($user_image)) {
    $userImage = "../img/" . $user_image;
} else {
    $userImage = "https://via.placeholder.com/550x300";
}

// Aktivasi btn Update Profile
if (isset($_POST['update_profile'])) {
    $email = escape($_POST['email']);
    $password = escape($_POST['password']);
    // Membuat variable enksripsi password
    $hash_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => '10'));

    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];

    move_uploaded_file($user_image_tmp, "../img/" . $user_image);

    if (empty($user_image)) {
        $user_image = $result['user_image'];
    }

    if (empty($password)) {
        $password = $result['password'];
    }

    $query = query("UPDATE users SET user_image='$user_image',
                                            email='$email',
                                            password='$hash_password' 
                                            WHERE id_user='$id_user' ");
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
                                <input type="file" class="form-control" name="user_image">
                            </div>
                        </div>
                        <div class=" form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $result['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $result['username'] ?>" readonly>
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