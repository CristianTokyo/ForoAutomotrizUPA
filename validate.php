<?php
if (isset($_POST["button"])) {

    require_once("conexion.php");
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $sql = "SELECT pass,email, nombre from users WHERE email = '$email' and pass = '$pass' order by nombre";
    if ($result = mysqli_query($conexion, $sql)){
      $row   = mysqli_fetch_row($result);    }

    print_r($row);
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
      if ($_SESSION['login']== True || ($pass  == $row[0] && $email == $row[1]))
      {
            $_SESSION['login'] = True;
            $_SESSION['participante'] = $row[1];
            $_SESSION['nombre'] = $row[2];
            $_SESSION['clave'] = $row[0];
            if ($_SESSION['nombre'] == 'administrador')
              header("location:listados.php"); // poner a vista de formulario
            else
                header("location:formulario.php");
      }


    }
    //mysqli_close($conexion);
}
//require 'login.php';
