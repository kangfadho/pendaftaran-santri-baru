<?php

require_once "connect.php";

function login(string $username, string $password)
{
    global $dbc;
    $stmt = $dbc->prepare("SELECT username, password, role FROM users WHERE username = :username AND password = :password AND role = 'santri'");
    $stmt->execute([
        ":username" => $username,
        ":password" => $password,
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        return $user;
    }
    return false;
}
?>