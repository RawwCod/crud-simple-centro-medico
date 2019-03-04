<?php

function dbConnect() {
    $conn = null;
    $host = 'localhost';
    $user = 'root';
    $pwd  = '';
    $db   = 'crud';
        try {
            $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pwd);
        } catch (PDOException $e) {
            echo '<p>Error en la conexion de la base de datos.</p>';
            exit;
        }
    return $conn;
}
