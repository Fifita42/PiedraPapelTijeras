const movs = ["piedra", "papel", "tijera"]
let resultados = [];
let jugadas = [];

//predefinir movimientos aleatoriamente
let jugadadelamaquina = shuffleArray(movs);
function shuffleArray(array) {
    return array.sort(() => Math.random() - 0.5);
}
function verificar() {
    
    //comprobar si jugador1 hizo una eleccion
    if (document.getElementById("jugador1").selectedIndex == "") {
        alert("ERROR: Jugador no ha seleccionado")
        return false;
    }
    
    //enviar la jugada y evaluar quien gana
    const response = validar(jugadadelamaquina);
    resultados.push(response.resultado);
    jugadas.push(response.jugada);
    
    //efectos despues de movimientos de la maquina
    $textoResultado = $(".resultado-ganar-perder");
    $textoResultado.text(response.resultado).css("display", "none").fadeIn(500);
    $(`.contenedor_imagen_seleccion .${response.robot}`).css("display", "none").fadeIn(1000);

    //subir ganador final y reiniciar
    if (resultados.length > 2) {
        //verificar cuantas veces gano y cuantas perdio
        const cantidadGanas = resultados.filter(item => item === "gana").length;
        const cantidadPerdidas = resultados.filter(item => item === "pierde").length;
        let ganoPerdio = (cantidadGanas >= 2) ? "Ganaste" : (cantidadGanas == 1 && cantidadPerdidas == 1) ? "Empate" : "Perdiste";
        const data = {
            usuario: document.querySelector(".nombrejugador").innerText,
            resultado: ganoPerdio,
            jugada: jugadas
        }
        //subir si gano o no y todas las jugadas que hizo
        fetch('solucion.php',
            {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
        resultados=[];
        $textoResultado.text(ganoPerdio + "!");
        $(".boton").click(() => window.location.href = `game.php`).text("Otra vez");
    }
}
//borrar toda la tabla
$(".borrar").click(function () {
    window.location = "eliminar.php"
});

//actualizar la seleccion
$("#jugador1").change(function () {
    $("#imagen_selecion_jugador1").attr("src", `img/${$("#jugador1").val()}.png`);
});
