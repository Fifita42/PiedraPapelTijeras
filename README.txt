Este programa es una aplicación web que permite jugar al clásico juego de piedra, papel o tijeras contra una máquina inteligente. 
Se ha desarrollado con tecnologías web como PHP, MySQL, Apache, HTML, JQuery, CSS y Bootstrap. 
Para ejecutarlo, se utiliza Docker, que facilita el despliegue de la aplicación con las imágenes de MySQL y Apache con las versiones mysql:5.7 y php:7.4-apache. 
El programa se puede instalar fácilmente con un solo comando Docker que se ocupa de descargar e instalar las dependencias necesarias. 
El comando es el siguiente:

docker-compose up -d
*NOTAS:  
    - Recordar ubicar la consola en la ubicación del archivo llamado docker-compose.yml
    - Se recomienda que la primera vez se esperen 5 segundos despues de que se hayan descargado e iniciado todos los recursos para evitar errores de creacion.

Después de ejecutar el comando, se puede acceder al programa desde cualquier navegador web escribiendo localhost en la barra de direcciones. 
Al entrar en la página principal, se puede introducir un nombre de usuario opcional que se mostrará en las tablas de clasificación al final de cada partida. 
Si no se introduce ningún nombre, el usuario se llamará por defecto Usuario más algún numero. Los nombres de usuario deben ser unicos.
Al pulsar el botón START, se inicia el juego.

El juego consiste en elegir entre piedra, papel o tijera en cada jugada y competir contra la máquina, que elegirá según un algoritmo que no hará fácil el juego. 

La elección del usuario se muestra en el lado izquierdo de la pantalla y la de la máquina en el lado derecho. 

Las opciones piedra papel o tijera se mostraran en la parte inferior de la pantalla, al seleccionar alguna, inmediatamente se ejecutará
la partida para determinar al vencedor del primer turno.


Cada partida consta de tres jugadas. Al finalizar las tres jugadas, se muestra el resultado final de la partida y se ofrece la opción de jugar otra vez pulsando el botón Otra vez. 
Al hacerlo, se recarga la página y se actualiza la tabla que hay debajo del juego con los datos de la última partida: fecha y hora, nombre del usuario, opciones elegidas y resultado final.

Una vez terminado de jugar, recordar escribir el siguiente comando en la consola anteriormente utilizada:
docker-compose down
Esto para detener los servicios de MySQL y Apache.