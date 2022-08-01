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
        include 'includes/tujuan/edit.php';
        break;
    case 'edit_deskripsi' : 
        include 'includes/tujuan/edit_deskripsi.php';
        break;
    default:
        include 'includes/tujuan/view.php';
        break;
}

?>

<?php include 'includes/admin_footer.php' ?>