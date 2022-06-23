<?php 

$dsn = "mysql:dbname=surfvilla;host=localhost";
$user = "root";
$pw = "";

try {
    $bdd = new PDO ($dsn, $user, $pw);
} catch (PDOException $error) {
    var_dump($error);
    die;
}

?>