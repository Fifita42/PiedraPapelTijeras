function validar(maquina) {
    const jugador1 = document.getElementById("jugador1").value;
    const jugador2 = jugadadelamaquina[jugadadelamaquina.length - 1];
    let response = {
        resultado: "",
        jugada: "",
        robot: ""
    }
    
    const resultados = {
        "piedra": {"piedra": "empate", "papel": "pierde", "tijera": "gana"},
        "papel": {"piedra": "gana", "papel": "empate", "tijera": "pierde"},
        "tijera": {"piedra": "pierde", "papel": "gana", "tijera": "empate"}
    };

    response.resultado = resultados[jugador1][jugador2];
    if (response.resultado != "pierde")  maquina.pop();
    
    response.jugada = jugador1 + ":" + jugador2;
    response.robot = jugador2;
    return response;
}
