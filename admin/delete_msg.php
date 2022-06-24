<?php

include "./config/bdd.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    var_dump($id);

    $sql = "DELETE FROM message WHERE id = $id";

    $request = $bdd->prepare($sql);

    if (!$request->execute()) {
        header("location:index.php");
        die;
    }

    header("location:index.php");
    die;
}

?>
