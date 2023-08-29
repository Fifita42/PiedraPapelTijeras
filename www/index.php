<?php include("crear.php") ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>PPT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="./css/extra/bootstrap.css">
    <link rel="stylesheet" href="./css/extra/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/extra/bootstrap.rtl.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./scripts/jquery.js"></script>
</head>
<body>
    <form class="row" action="game.php" method="POST">
        <div class="col-12 arriba">
            <div class="contenido">
                <div class="contenedor-usuario">
                    <label for="usuario">Nombre:</label>
                    <input type="text" class="usuario" name="usuario" id="usuario">
                </div>
                <div class="titulo">
                    <p>Piedra</p><p>Papel</p><p>Tijera</p>
                </div>
                <input type="submit" class="boton" value="START" id="boton">
            </div>
        </div>
    </form>
    <section class="row">
        <div class="col-12 abajo">
            <div class="contenido">
                <img src="img/piedra.png">
                <img src="img/papel.png">
                <img src="img/tijera.png">
            </div>
        </div>
    </section>
    <script>
        <?include("conexion.php");?>
        $(".boton").click(()=>window.location="game.php");
    </script>
</body>
</html>