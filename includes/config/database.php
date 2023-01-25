<?php

function conectaDB() : mysqli {
    $db = new mysqli('localhost', 'root', '', 'sistema_reporte_mobiliario1');

    if(!$db) {
        echo "Error";
        exit;
        
    }else {
        echo "NO HAY ERROR";
    }

    return $db;
}