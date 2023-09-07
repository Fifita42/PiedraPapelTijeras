CREATE DATABASE IF NOT EXISTS juego;
USE juego;
CREATE TABLE IF NOT EXISTS resultados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(20) NOT NULL,
    Jugadas VARCHAR(50),
    Resultado VARCHAR(9),
    fecha_registro DATETIME
);