<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

<?php
if (isset($_GET['id_berita'])) {
    $id_berita = $_GET['id_berita'];
    $query = query("SELECT * FROM berita WHERE id_berita='$id_berita'");
    $result = mysqli_fetch_array($query);
    $berita_title = $result['berita_title'];
    $berita_description = $result['berita_description'];
    $berita_date = $result['berita_date'];
    $berita_image = $result['berita_image'];
    $berita_author = $result['berita_author'];
}

// Jika gambar ada, maka tampilkan, jika tidak maka ambil gambar melalui link
if ($berita_image) {
    $dir = "assets/images/berita/$berita_image";
} else {
    $dir = "https://via.placeholder.com/500x300";
}

// // Apakah harus dimasukkan kedalam if ?
// if (isset($_POST['add_comment'])) {
//     $comment_name = escape($_POST['comment_name']);
//     $comment_email = escape($_POST['comment_email']);
//     $comment_description = escape($_POST['comment_description']);


//     $query = query("INSERT INTO comments(comment_post_id, comment_name, comment_email, comment_description, comment_date)
//                         VALUES ('$id_post', '$comment_name', '$comment_email','$comment_description', now()) ");
//     confirmQuery($query);
//     if ($query) {
//         redirect('post_artikel.php?read_more=' . $id_post);
//     }
// }
?>

<!-- Main Content -->
<main>
    <div class="container my-5">
        <div class="nav-item justify-content-start">
            <a class="fw-bold rounded nav-link link-secondary" style="padding: 5px;" href="berita.php">Kembali</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <img src="<?= $dir ?>" class="rounded mx-auto d-block w-100">
                <div class="h2 mt-3"><?= $berita_title ?></div>
                <span class="fs-6 fw-lighter text-secondary">Oleh: <?= $berita_author ?> | <?= $berita_date ?></span>
                <div class="content my-3">
                    <p><?= $berita_description ?></p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php' ?>