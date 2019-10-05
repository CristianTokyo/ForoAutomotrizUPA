<?php
if (isset($_POST["button"])) {
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
     header("location:formulario.php "); // poner a vista de formulario
    }
    //mysqli_close($conexion);
}
