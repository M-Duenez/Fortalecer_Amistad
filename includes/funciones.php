<?php

function estaAutenticado() : bool {
    session_start();

    $auth = $_SESSION['login'];
    if($auth) {
        return true;
    }
    return false;
}

function debug($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}