<?php session_start(); 
if (isset($_POST["button"])) {

    require_once("conexion.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $sql = "SELECT pass,email from users WHERE email = '$email' and pass = '$pass'";
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


    }
    //mysqli_close($conexion);
}
require 'login.php'; 