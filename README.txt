Este programa es una aplicación web que permite jugar al clásico juego de piedra, papel o tijeras contra una máquina. 
Está desarrollado con PHP, MySQL, Apache, HTML, JQuery, CSS y Bootstrap. 
Para ejecutarlo, se utiliza Docker, que proporciona imágenes de MySQL y Apache con las versiones mysql:5.7 y php:7.4-apache. 
El programa se puede instalar fácilmente con un solo comando Docker que se encarga de descargar e instalar las dependencias necesarias. 
El comando es el siguiente:

docker-compose up -d
*NOTA:  recordar ubicar la consola en la ubicación del archivo llamado docker-compose.yml

Después de ejecutar el comando, se puede acceder al programa desde cualquier navegador web escribiendo localhost en la barra de direcciones. 
Al entrar en la página principal, se puede introducir un nombre de usuario opcional que se mostrará en las tablas de clasificación al final de cada partida. 
Si no se introduce ningún nombre, el usuario se llamará por defecto usuario. Al pulsar el botón START, se inicia el juego.

El juego consiste en elegir entre piedra, papel o tijera en cada jugada y competir contra la máquina, que elegirá al azar (OJO!, utilizará una tactica que no hará facil el juego). 
La elección del usuario se muestra en el lado izquierdo de la pantalla y la de la máquina en el lado derecho. 
Debajo del nombre del jugador hay un menú desplegable para seleccionar la opción deseada. 
Una vez seleccionada, se pulsa el botón JUGAR y se muestra el resultado de la jugada en el centro de la pantalla, donde antes ponía VS. 
El resultado puede ser empate, victoria o derrota.

Cada partida consta de tres jugadas. Al finalizar las tres jugadas, se muestra el resultado final de la partida y se ofrece la opción de jugar otra vez pulsando el botón Otra vez. 
Al hacerlo, se recarga la página y se actualiza la tabla que hay debajo del juego con los datos de la última partida: fecha y hora, nombre del usuario, opciones elegidas y resultado final.

Una vez terminado de jugar, recordar escribir el siguiente comando en la consola anteriormente utilizada:
docker-compose down
Esto es para cerrar todos los servicios iniciados para este programa.