<?php session_start(); 
if (isset($_POST["button"])) {
<<<<<<< HEAD
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
=======
    require_once("conexion.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $sql = "SELECT pass,email from users WHERE email = '$email'";
    if ($result = mysqli_query($conexion, $sql)){
      $row   = mysqli_fetch_row($result);    }
    //$result = mysqli_query($conexion, "Select email from users where email= '$email';");
    //$row = mysqli_fetch_array($result);


    if ($pass != $row[0]|| $email != $row[1]) {
      echo "<script>";
      echo "alert('Datos incorrectos');";
      echo "window.location = 'index.html ';";
      echo "</script>";
    }
    else {
      session_start();
      if ($_SESSION['login']== True || ($pass  == $row[0] && $email == $row[1])){
            $_SESSION['login'] = True;
            $_SESSION['participante'] = $row[1];
            $_SESSION['clave'] = $row[0];
            header("location:formulario.php"); // poner a vista de formulario
      }

>>>>>>> 17ac4230d7806f2125f372c3581eafa37078ada8
    }
    //mysqli_close($conexion);
}
require 'login.php'; 