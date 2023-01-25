<?php

function conectaDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'root', 'sistema_reporte_mobiliario');

    if($db) {
        echo "Erro";
        
    }
    echo "TAMO BIEN";

    return $db;
}