<?php
    require 'includes/app.php';
    $db = conectaDB();

    $username = 'admin';
    $password = '123456';

    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (username, password) VALUES ('{$username}', '{$passwordhash}')";
    echo $query;

    mysqli_query($db, $query);

?>