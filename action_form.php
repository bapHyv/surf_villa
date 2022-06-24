<?php 

include './admin/config/bdd.php';

if (isset($_POST["btn_add_client"])) {
    session_start();
    $fn = htmlentities($_POST["firstname"]);
    $ln = htmlentities($_POST["lastname"]);
    $mail = htmlentities($_POST["mail"]);
    $msg = htmlentities($_POST["message"]);

    $sql = "INSERT INTO message VALUES (NULL, :fn, :ln, :mail, :msg, NOW(), 1)";

    $requete = $bdd->prepare($sql);

    $data = [
        ":fn" => $fn,
        ":ln" => $ln,
        ":mail" => $mail,
        ":msg" => $msg,
    ];

    if (!$requete->execute($data)) {
        $_SESSION["error_msg_form"] = true;
        header("location:index.php");
        die();
    }

    $_SESSION["error_msg_form"] = false;
    header("location:index.php");
    die;
}

?>