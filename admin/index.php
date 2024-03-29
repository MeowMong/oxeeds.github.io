<?php include '../includes/db.php' ?>
<?php include 'includes/function.php' ?>
<?php session_start() ?>

<?php
if (isset($_SESSION['login'])) {
    redirect('dashboard.php');
}

if (isset($_POST['login'])) {
    $username = escape($_POST['username']);
    $password = escape($_POST['password']);

    $query = query("SELECT * FROM admins WHERE username='$username' ");

    // Cek Username
    if (mysqli_num_rows($query) === 1) {
        // Cek Password
        $row = mysqli_fetch_assoc($query);
        if ($password === $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['admin_image'] = $row['admin_image'];
            redirect('dashboard.php');
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/sb-admin-2.css"> -->

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="../assets/images/admin/bg_login.png" alt="bg_login.png" style="background-position: center;background-size: cover;width: 750px;height: 500px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                        <h2 class="h4 text-gray-900 mb-4">SD N 1 Purwokerto Kulon</h2>
                                    </div>
                                    <?php if (isset($error)) : ?>
                                        <p style="color:red; font-style:italic;">Username / Password Salah!</p>
                                    <?php endif; ?>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Login</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>