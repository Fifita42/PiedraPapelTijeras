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

    <form class="row" method="POST" action="game.php" id="form">
        <div class="col-12 arriba">
            <div class="contenido">
                <div class="contenedor-usuario">
                    <label for="usuario">Nombre:</label>
                    <input type="text" class="usuario" name="usuario" id="usuario" maxlength="10" placeholder="Usuario">
                    <div class="loader nover"></div>
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
    document.getElementById("form").addEventListener("submit", async (event) => {
    event.preventDefault();
    document.querySelector(".loader").classList.remove("nover");
    
    const formData = new FormData(event.target);

    const response = await fetch("./conexiones/verificarusuario.php", {
        method: "POST",
        body: formData
    });

    const data = await response.text();

    if (data !== "ok") alert(data);
    else event.target.submit();
    
});

</script>
</body>
</html>