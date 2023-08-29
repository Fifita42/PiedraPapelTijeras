<?php
    include("conexion.php");
    $consulta="DELETE FROM resultados";
    $query=$conn->query($consulta);
    header("Location:game.php");
?>