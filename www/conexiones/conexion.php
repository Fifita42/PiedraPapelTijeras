<?php 
    error_reporting(0);
    ini_set('display_errors', 0);
    $servername = "db";
    $dbname = "juego";
    $username="root";
    $password = "1234"; 

    while (true) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Verifica si la tabla existe
        $verificar_tabla = "SHOW TABLES LIKE 'resultados'";
        $resultado = $conn->query($verificar_tabla);

        if ($resultado->num_rows > 0) break;
        
        // Si la tabla aún no existe, espera un tiempo antes de volver a intentar
        sleep(1); 
    }
?>