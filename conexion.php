<?php
try {
    $conexion = new PDO ("mysql:host=localhost;dbname=events",'root','');
} catch (PDOException $e) {
    echo "Error de conexión ". $e->getMessage();
}
