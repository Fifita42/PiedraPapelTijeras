<?php
    include("conexion.php");
    
    $sql="SELECT * FROM resultados";
    $resultados=$conn->query($sql);
    
    $sql = "SELECT usuario FROM resultados ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    
    $usuario = (!empty($_POST['usuario'])) ? $_POST['usuario'] : (mysqli_fetch_row($result)[0] ?? "usuario"); 
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Piedra, Papel y Tijeras</title>
    <link rel="stylesheet" href="./css/extra/bootstrap.css">
    <link rel="stylesheet" href="./css/extra/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/extra/bootstrap.rtl.css">
    <link rel="stylesheet" href="./css/game.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <script src="./scripts/jquery.js"></script>
</head>
<body>
    <section class="row">
        <form class="col-12 form-inline" id="formulario" method="post">
            <div class="col-md-4 col-sm-12 morado">
                <div class="nombrejugador">
                    <img src="img/maquina.png"alt="">
                    <?php 
                        echo "$usuario";
                    ?>
                </div>
                <div class="morado_elecciones">
                    <select class="seleccion form-control form-control-lg" id="jugador1" name="jugador1">
                        <option>Selecciona</option>
                        <option value="piedra">Piedra</option>
                        <option value="papel">Papel</option>
                        <option value="tijera">Tijera</option>
                    </select>
                    <div class="contenedor_imagen_seleccion">
                        <img src="img/piedra.png" id="imagen_selecion_jugador1" alt="">
                    </div> 
                </div>
            </div>
    
            <div class="col-md-4 col-sm-12 gris">
                <div class="centro">
                    <div class="vs resultado-ganar-perder">VS</div>
                    <div class="boton" id="boton" onclick="verificar()">JUGAR</div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 azul">
                <div class="nombrejugador">
                    Maquina
                    <img src="img/maquina.png"alt="">
                </div>
                <div class="contenedor_imagen_seleccion">
                    <img src="img/piedra.png" class="piedra" id="imagen_selecion_jugador2" alt="">
                    <img src="img/papel.png" class="papel" id="imagen_selecion_jugador2" alt="">
                    <img src="img/tijera.png" class="tijera" id="imagen_selecion_jugador2" alt="">
                </div> 
            </div>
        </form>
    </section>

    <?php include("tabla.php")?>
    <script src="./scripts/script.js"></script>
    <script src="./scripts/validar.js"></script>
</body>
</html>