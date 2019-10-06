<?php
require("conexion.php");
require("validate.php");
session_start(); //Obtiene los resultados de la sesión
if ($_SESSION['participante']){   //asegurar que esta logeado
  //print_r($_SESSION);
  if(!empty($_POST))
  {
    if(isset($_POST['guardar'])) //Viene del formulario
    {
      $eventos  =  array();
      $postArreglo = array('tag_1','tag_2','tag_3','tag_4','tag_5','tag_6','tag_7','tag_8','tag_9','tag_10','tag_11','tag_12');

      //Obtiene el idusr de la base de datos de la persona logeada
      $correo = $_SESSION['participante'];
      $nip = $_SESSION['clave'];
      $sql = "select idusr from users where email = '$correo'"; //falta un and al password
      if ($result = mysqli_query($conexion, $sql)){
        $row   = mysqli_fetch_row($result);    }

      $numUsuario = $row[0];

      //eventos suscrito
      $sql = "select idevent from users_events where idusr = '$numUsuario' order by idevent";
      if ($result = mysqli_query($conexion, $sql))
      {
        while ( $row = mysqli_fetch_object($result))
        {
          $rows   = $result->fetch_assoc();
          $eventoSuscrito[] = $row;
        }
      }
      print_r($eventoSuscrito);
      echo "ff<br>";
      $test = $eventoSuscrito[0];
      echo "<br>";
      print_r($test);
      echo "<br>";
      echo $test[idevent];
      //echo $eventoSuscrito[0];
      $numEventos = mysqli_num_rows($result);;
      echo "<br> Eventos: ";
      echo $numEventos;


      //si el cupo esta lleno  el evento se omite

      //si ya tiene eventos seleccionados se omiten



      foreach ($postArreglo as $key => $value) {
        // seleccionar los eventos a los que está suscrito

      }


      //Obtiene los eventos seleccionados
      foreach ($postArreglo as $postNombre) {
        if (array_key_exists($postNombre, $_POST)){
          $eventos[] = $_POST[$postNombre];
        }
      }

      //Inscribe al participante en las actividades
      foreach ($eventos as $key => $value) {
        $sql = "insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$numUsuario','$value')";
        $result = mysqli_query($conexion, $sql);
        if ($result == 1)
        {
        /*  echo "<script>";
          echo "alert('Datos guardados');";
          echo "window.location = 'formulario.php';";
          echo "</script>";*/
        }
      }
    }
  }
  require 'formularioP.php';
}




//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
