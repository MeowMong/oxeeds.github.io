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
            include 'includes/artikel/add.php';
            break;
        case 'edit':
            include 'includes/artikel/edit.php';
            break;

        default:
        include 'includes/artikel/view.php';
        break;
    }

?>

<?php include 'includes/admin_footer.php'; ?>