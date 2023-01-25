<?php

function conectaDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'root', 'sistema_reporte_mobiliario');

    if(!$db) {
        echo "Erro";
        exit;
        
    }else {
        echo "NO HAY ERROR";
    }

    return $db;
}