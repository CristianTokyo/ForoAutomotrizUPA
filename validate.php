<?php session_start(); 
if (isset($_POST["button"])) {
    require("conexion.php");

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $result = $conexion -> prepare(" SELECT idusr,email, pass from users where email= :mail and pass = :pass  ");
    $result->execute(
        array(
            ":mail"=>$email,
            ":pass"=>$pass
        )
        );
    $resultado = $result->fetch();
    if (!$resultado) echo "<script> alert('Verifique Los Datos'); </script>";
    else {
     $_SESSION['id'] = $resultado['idusr']; 
     header("location:formulario.php "); // poner a vista de formulario
    }
}
require 'login.php'; 