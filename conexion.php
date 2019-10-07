<?php
try {

    /*$username = 'foroaut1_upa';
    $password = '*d%pOamDx!zP';*/

    $username = 'root';
    $password = '';


    $database = 'foroaut1_events';
    $linkHost = 'localhost';
    $conexion = mysqli_connect($linkHost, $username, $password) or die ("problemas de conección");
    $baseUsuarios = mysqli_select_db($conexion, $database)or die("problemas de conexión DB");
    $conexion->set_charset("utf8");

} catch (PDOException $e) {
    echo "Error de conexión ". $e->getMessage();
}
