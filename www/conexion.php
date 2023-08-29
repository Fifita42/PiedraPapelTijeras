<?php 
    $servername = "db";
    $dbname = "juego";
    $username="root";
    $password = "1234"; 
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }
?>