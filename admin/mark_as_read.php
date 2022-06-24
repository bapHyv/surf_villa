<?php 

include './config/bdd.php';

var_dump($_GET);

$msg_id = intval($_GET["id"]);

$sql = "UPDATE message SET status = 0 WHERE id = $msg_id";
$request = $bdd->query($sql);

header('location:index.php');

?>