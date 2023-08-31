    <?php
        include("conexion.php");
        $sql="SELECT * FROM resultados";
        $resultados=$conn->query($sql);
        
        $sql = "SELECT usuario FROM resultados ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        
        $usuario = (!empty(trim($_POST['usuario']))) ? htmlspecialchars($_POST['usuario']) : (mysqli_fetch_row($result)[0] ?? "Usuario"); 
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
    <div class="row fondo">
        <div class="row-12 d-flex contenedor-jugadores">
            <div class="nombrejugador">
                <img src="img/maquina.png">
                <?php echo "$usuario";?>
            </div>
            <div class="nombrejugador partida">0/3</div>
            <div class="nombrejugador">Máquina <img src="img/maquina.png"alt=""></div>
        </div>
        <div class="row contenedor-jugador">

            <div class="col-6 d-flex justify-content-center"><img class="jugador jugador1" src="img/piedra.png" alt=""></div>
            
            <div class="contenedor-final">
                <div class="contenedor-final_final">
                    <h3 class="resultadofinal"></h3>
                    <<input type="button" class="reiniciar-boton no-ver" value="Otra vez">
                    
                </div>
            </div>

            <div class="col-6 d-flex justify-content-center"><img class="jugador jugador2" src="img/piedra.png" alt=""></div>

        </div>
        <input type="hidden" id="jugador1" name="jugador1" value="">
        <div  class="contenedor_imagen_seleccion">
            <img src="img/piedra.png" name="piedra" class="opcion" onclick="document.getElementById('jugador1').value=event.target.name;verificar()">
            <img src="img/papel.png" name="papel" class="opcion" onclick="document.getElementById('jugador1').value=event.target.name;verificar()">
            <img src="img/tijera.png" name="tijera" class="opcion" onclick="document.getElementById('jugador1').value=event.target.name;verificar()">
        </div>
        <?php include("tabla.php")?>
    </div>
</body>
<script src="./scripts/script.js"></script>
<script src="./scripts/validar.js"></script>
</html>