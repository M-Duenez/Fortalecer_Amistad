<?php
    require 'includes/app.php';
    $db = conectaDB();

    $fullname = 'Administrados';
    $username = 'admin';
    $password = '123456';

    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (fullname, username, password) VALUES ('{$fullname}', '{$username}', '{$passwordhash}')";
    echo $query;

    mysqli_query($db, $query);

?>