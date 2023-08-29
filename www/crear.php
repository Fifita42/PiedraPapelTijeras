<?php
$servername = "db";
$username = "root";
$password = "1234";
$dbname = "mysql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS juego";
if ($conn->query($sql) === FALSE)
{
    echo "Error al crear la base de datos: " . $conn->error;
}

$sql = "USE juego";
if ($conn->query($sql) === FALSE) 
{
    echo "Error al seleccionar la base de datos: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS resultados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255),
    Jugadas VARCHAR(255),
    Resultado VARCHAR(255),
    fecha_registro DATETIME
)";
if ($conn->query($sql) === FALSE)
{
    echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>
