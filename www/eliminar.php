<?php
    include("./conexiones/conexion.php");
    $consulta="DELETE FROM resultados";
    $query=$conn->query($consulta);
    header("Location:index.php");
?>