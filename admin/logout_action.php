<?php 
    session_start();
    unset($_SESSION['logged_user']);
    unset($_SESSION['logged_pseudo']);
    unset($_SESSION['logged_avatar']);
    session_unset();
    session_destroy();
    header('location:index.php');
?>