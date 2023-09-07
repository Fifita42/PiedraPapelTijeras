<?php
include("./conexiones/conexion.php");

try {
    $data = json_decode(file_get_contents("php://input"), true);
    $usuario = $data['usuario'];
    $resultado = $data['resultado'];
    $jugada = implode(", ", $data['jugada']);
    
    $sql = "INSERT INTO resultados (usuario, Jugadas, Resultado, fecha_registro) VALUES ('$usuario', '$jugada', '$resultado', NOW())";
    
    if ($conn->query($sql)) echo "ok";
    else echo "Error en la consulta: " . $conn->error;
    
} catch (Exception $e) {
    echo "Ocurrió un error: " . $e->getMessage();
}
?>
