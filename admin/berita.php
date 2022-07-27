<?php include 'includes/admin_header.php'; ?>
<?php include 'includes/admin_navigation.php'; ?>

<?php 

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page ='';
    }

    switch($page){
        case 'add':
            include 'includes/berita/add.php';
            break;
        case 'edit':
            include 'includes/berita/edit.php';
            break;

        default:
        include 'includes/berita/view.php';
        break;
    }

?>

<?php include 'includes/admin_footer.php'; ?>