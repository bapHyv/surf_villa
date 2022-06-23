<?php

include './config/bdd.php';

if (isset($_POST['btn_login'])) {
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);

    $sql = 'SELECT * FROM admin WHERE email = :email LIMIT 1';
    $data = [':email' => $email];
    $request = $bdd->prepare($sql);
    $request->execute($data);
    $data_admin = $request->fetch(PDO::FETCH_ASSOC);
    $admin_firstname = $data_admin['firstname'];
    $admin_email = $data_admin['email'];
    $admin_password = $data_admin['password'];

    if (password_verify($password, $admin_password)) {
        session_start();
        $_SESSION['admin_firstname'] = $admin_firstname;
        $_SESSION['admin_email'] = $admin_email;
        header('location:http://localhost:8888/surf_villa/admin/index.php');
        die();
    }
}

?>
