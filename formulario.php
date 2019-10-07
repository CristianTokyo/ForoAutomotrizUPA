
<?php
require("conexion.php");
require("validate.php");
session_start(); //Obtiene los resultados de la sesión

if ($_SESSION['participante'])
{   //asegurar que esta logeado

  $postArreglo = array('tag_1','tag_2','tag_3','tag_4','tag_5','tag_6','tag_7','tag_8','tag_9','tag_10','tag_11','tag_12');
  //Obtiene el idusr de la base de datos de la persona logeada
  $correo = $_SESSION['participante'];
  $nip = $_SESSION['clave'];
  $sql = "select idusr from users where email = '$correo'"; //falta un and al password
  if ($result = mysqli_query($conexion, $sql))
    $row   = mysqli_fetch_row($result);

  $numUsuario = $row[0];

  //eventos suscrito
  $sql = "select idevent from users_events where idusr = '$numUsuario' order by idevent";
  if ($result = mysqli_query($conexion, $sql)) {
    if (!mysqli_num_rows($result)){
      $eventosSuscrito = array();
      $listaEventos = array();}
    else{
      while ($rows   = $result->fetch_assoc())
        $eventosSuscrito[] = $rows;

      //vector con el listado de eventos suscritos
      foreach ($eventosSuscrito as $key => $value) {
        $testEvent = $eventosSuscrito[$key];
        $listaEventos[] = $testEvent['idevent'];
      }
    }
  }

  //Lista de eventos en session
  $_SESSION['tags'] = array(1=>0,2=>0, 3=>0, 4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,
                              13=>0, 14=>0,15=>0,16=>0,17=>0);

  //si ya tiene eventos seleccionados se omiten
  foreach ($listaEventos as $key => $value)
      $_SESSION['tags'][$listaEventos[$key]] = 1;

  //si el cupo esta lleno  el evento se omite

  if(!empty($_POST)){
    if(isset($_POST['guardar'])) //Viene del formulario
    {
      $eventos  =  array();

    //Obtiene los eventos seleccionados
    foreach ($postArreglo as $postNombre) {
      if (array_key_exists($postNombre, $_POST))
        $eventos[] = $_POST[$postNombre];}

    //Inscribe al participante en las actividades
    foreach ($eventos as $key => $value) {
      $sql = "insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$row[0]','$value')";
      $result = mysqli_query($conexion, $sql);
    }

      $destinatario = "luis.ernesto.anaya@upa.edu.mx";
      $adunto  = "Talleres ";
      $cuerpo = '';
      foreach ($eventos as $key => $value) {
         $resultado = mysqli_query($conexion, "SELECT ename  FROM events WHERE idevent = $value");
         while ($consulta = mysqli_fetch_array($resultado))
           $cuerpo.= $consulta['ename']."<br> n";
      }
      // mail($destinatario,$asunto,$cuerpo); se manda los correos
    }
  }
}
require 'formularioP.php';

//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
//"<?php $_POST['$tag1_saved'] == 'True'? '':'checked';
