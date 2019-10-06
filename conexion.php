<?php
try {

    $username = 'root';
    $password = '';
    $database = 'events';
    $linkHost = 'localhost';
    $conexion = mysqli_connect($linkHost, $username, $password) or die ("problemas de coneccion");
    $baseUsuarios = mysqli_select_db($conexion, $database)or die("problemas de conexión DB");
    $conexion->set_charset("utf8");

} catch (PDOException $e) {
    echo "Error de conexión ". $e->getMessage();
}
