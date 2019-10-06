
<?php
require("conexion.php");
require("validate.php");
session_start(); //Obtiene los resultados de la sesión

if(!empty($_POST)){
  if(isset($_POST['guardar']))
  {
    $eventos  =  array();
    $postArreglo = array(1,2,3,4,5,6,7,8,9,10,11,12);

    //Obtiene los eventos seleccionados
    foreach ($postArreglo as $postNombre) {
      if (array_key_exists($postNombre, $_POST)){
        $eventos[] = $_POST[$postNombre];
      }
    }
    //Obtiene el idusr de la base de datos de la persona logeada
    $correo = $_SESSION['participante'];
    $nip = $_SESSION['clave'];
    $sql = "select idusr from users where email = '$correo'"; //falta un and al password
    if ($result = mysqli_query($conexion, $sql)){
      $row   = mysqli_fetch_row($result);    }

    //Inscribe al participante en las actividades
    foreach ($eventos as $key => $value) {
     
      $sql = "insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$row[0]','$value')";
      $result = mysqli_query($conexion, $sql);
    }
  }
  $destinatario = "luis.ernesto.anaya@upa.edu.mx";
  $adunto  = "Talleres ";
  $cuerpo = ''; 
  foreach ($eventos as $key => $value) {
     $resultado = mysqli_query($conexion, "SELECT ename  FROM events WHERE idevent = $value");
     while ($consulta = mysqli_fetch_array($resultado)) {
       $cuerpo.= $consulta['ename'].'<br>';
     }

  } 
  // mail($destinatario,$asunto,$cuerpo); se manda los correos 
}

require 'formularioP.php';

//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
