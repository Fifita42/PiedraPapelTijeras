<?php
include("conexion.php");
$mensaje = "ok";
if (isset($_POST["usuario"]) && $_POST["usuario"] != "") {
    
    // Obtén el nombre de usuario y escápalo para prevenir SQL Injection
    $nombre_usuario = trim(mysqli_real_escape_string($conn, $_POST["usuario"]));

    // Consulta SQL para verificar si el nombre de usuario existe
    $consulta = "SELECT * FROM resultados WHERE usuario LIKE '%$nombre_usuario'";
    $resultado = $conn->query($consulta);

    if ($resultado->num_rows > 0) $mensaje = "Ya existe ese usuario.";
}
echo $mensaje;
?>