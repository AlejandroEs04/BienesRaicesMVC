<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'Alejandroe2004ms*', 'bienesraices_crud');

    if (!$db) {
        echo "ERROR no se pudo conectar";
        exit;
    } 

    return $db;
}