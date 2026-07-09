<?php

require_once "database/function.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $islogin = login($username, $password);
    if ($islogin) {
        switch ($islogin) {
            case $islogin['role'] === 'admin':
                // redirect ke dashboard admin
                break;
            case $islogin['role'] === 'santri':
                // redirect ke dashboard admin
                break;
        }
    } else {
        echo "Tidak bisa login salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>

</body>

</html>