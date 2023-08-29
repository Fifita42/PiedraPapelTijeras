<?php
    include("conexion.php");
    try{
        $data = json_decode(file_get_contents("php://input"), true);
        $usuario = $data['usuario'];
        $resultado = $data['resultado'];
        $jugada = $data['jugada'];
        $cadena = implode(", ", $jugada);
        $sql = "INSERT INTO resultados (usuario, Jugadas, Resultado, fecha_registro) VALUES ('$usuario', '$cadena', '$resultado', NOW())";
        $resultados = $conn->query($sql);
        echo "ok";
    }
    catch(Exception $e){
        echo "Ocurrio un error: " . $e->getMessage();
    }
?>
