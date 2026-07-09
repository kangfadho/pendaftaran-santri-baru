<?php
$host = "localhost";
$username = "root";
$dbname = "pesantren";
$password = "";

try {
    $dbc = new PDO(`mysql:host={$host};dbname={$dbname}`, $username, $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo $err->getMessage();
}

?>