const movs = ["piedra", "papel", "tijera"];
let resultados = [];
let jugadas = [];

//predefinir movimientos aleatoriamente
let jugadadelamaquina = shuffleArray(movs);
function shuffleArray(array) {
    return array.sort(() => Math.random() - 0.5);
}


function verificar() {
    //si ya se jugo 3 veces, abandonar la funcion
    if(resultados.length >= 3) return;
    
    //cambiar imagen de las manos
    $(".jugador1").attr("src",`./img/${document.getElementById("jugador1").value}.png`).css("display", "none").fadeIn(500);
    $(".jugador2").attr("src",`./img/${jugadadelamaquina[jugadadelamaquina.length-1]}.png`).css("display", "none").fadeIn(500);

    //enviar la jugada y evaluar quien gana
    const response = validar(jugadadelamaquina);
    
    //si se devuelve algun error, abandonar la funcion
    if(!response) return;

    //almacenar los resultados y jugadas para subir luego a la base de datos
    resultados.push(response.resultado);
    jugadas.push(response.jugada);

    //Efectos de resultado
    $(".partida").text(response.resultado).css("display", "none").fadeIn(1000);
    document.querySelector(".partida").innerText = resultados.length+"/3"
    
    //subir ganador final
    if (resultados.length > 2) {
        //verificar cuantas veces gano y cuantas perdio
        const cantidadGanas = resultados.filter(item => item === "gana").length;
        const cantidadPerdidas = resultados.filter(item => item === "pierde").length;
        let ganoPerdio = (cantidadGanas >= 2) ? "Ganaste" : (cantidadGanas == 1 && cantidadPerdidas == 1) ? "Empate" : "Perdiste";

        const data = {
            usuario: document.querySelector(".nombrejugador").innerText,
            resultado: ganoPerdio,
            jugada: jugadas
        };

        //subir si gano o no y todas las jugadas que hizo
        fetch('solucion.php',
            {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            $textoResultado = $(".resultadofinal");
            $textoResultado.text(response.resultado).css("display", "none").fadeIn(500);
            $(".reiniciar-boton").fadeIn(500);
            $textoResultado.text(ganoPerdio + "!");

    }
}

//borrar toda la tabla
$(".borrar").click(()=> window.location = "eliminar.php");

//reiniciar juego
$(".reiniciar-boton").click(()=>window.location = "game.php");
function goBack(){
    window.location = "index.php"
}