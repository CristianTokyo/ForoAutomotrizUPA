<?php
if (isset($_POST["button"])) {
    require_once("conexion.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $result = mysqli_query($conexion, "Select email, pass from users where email= $email;");
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    if ($pass != $row[0] && $email != $row[1]) echo "<script> alert('Verifique Los Datos'); </script>";
    else {
     header("location:formulario.php "); // poner a vista de formulario
    }
}
