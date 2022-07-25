<?php 
    session_start();
// Menghapus $_SESSION yang sebelumnya telah dilakukan (login)
    $_SESSION = [];
    session_unset();
    session_destroy();

    setcookie('id_user','', time() - 3600);
    setcookie('key','', time() - 3600);

    header('Location: ../index.php');
    
?>