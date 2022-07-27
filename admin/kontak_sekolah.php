<?php include 'includes/admin_header.php'; ?>
<?php include 'includes/admin_navigation.php' ?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

switch ($page) {
    case 'edit':
        include 'includes/kontak_sekolah/edit.php';
        break;
    default:
        include 'includes/kontak_sekolah/view.php';
        break;
}

?>

<?php include 'includes/admin_footer.php' ?>