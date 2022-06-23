<?php
session_start();

if (!isset($_SESSION['admin_firstname'])) {
    header('location:http://localhost:8888/surf_villa/admin/login.php');
}

?>
