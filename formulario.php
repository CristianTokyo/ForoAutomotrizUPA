
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
      $sql = "insert into `foroaut1_events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$row[0]','$value')";
      $result = mysqli_query($conexion, $sql);
    }

      $destinatario = "wicho.anaya@gmail.com";
      $asunto  = "Eventos del Foro Automotriz";
      $cuerpo = '<html>
                <head>
                <title>Foro Automotriz</title>
                <style type="text/css">
                h1{color: ##0093CA;}
                p{font-size: 1rem; }
                img{
                    width: 10rem;
                    height: 10rem;}
                </style>
              </head>
              <body>
                <h1>Bienvenido al Foro Internacional de la </h1><br>
                <h1>Industria Automotriz Ags-UPA</h1>
                <p>Estos son las actividades a las que estás inscrito:<br></p>';

      $encabezados = "MIME-Version: 1.0" . "\r\n";
      $encabezados .= "Content-type:text/html; charset=UTF-8" . "\r\n";
      $encabezados .= "From:registro@foroautomotrizags-upa.com" . "\r\n";
      $encabezados .= "Bcc:registro@foroautomotrizags-upa.com" . "\r\n";

      //Obtiene el horario completo del usuario
      $sql = "SELECT ename, manager, day, beginhr, finishhr from users_events, events
              WHERE users_events.idevent = events.idevent and users_events.idusr = '$numUsuario'";
      if($resultado = mysqli_query($conexion, $sql))
      while ($rows   = $resultado->fetch_assoc())
        $horario[] = $rows;

      $cuerpo .= '<table>
      <thead>
        <tr>
          <th>Actividad</th>
          <th>Expositor</th>
          <th>Día</th>
          <th>Hora Inicio</th>
          <th>Hora Fin</th>
        </tr>
    </thead><tbody>';
      foreach ($horario as $key => $value) {
          $cuerpo .= "<tr><td>".$horario[$key]['ename']."</td>";
          $cuerpo .= "<td>".$horario[$key]['manager']."</td>";
          $cuerpo .= "<td>".$horario[$key]['day']." Nov </td>";
          $cuerpo .= "<td>".$horario[$key]['beginhr']."</td>";
          $cuerpo .= "<td>".$horario[$key]['finishhr']."</td></tr>";
      }

      $cuerpo .= '</tbody></table>';
      $cuerpo .= '<p>Te esperamos.</p>

        </body></html>'."\r\n";


      $resultado = mail($destinatario,$asunto,$cuerpo,$encabezados); //se manda los correos

      if ($resultado){
      echo "<script>";
      echo "alert('Datos guardados, revise su correo');";
      echo "window.location = 'formulario.php';";
      echo "</script>";}
    }
  }
}
require 'formularioP.php';

//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
//"<?php $_POST['$tag1_saved'] == 'True'? '':'checked';

//SELECT ename, manager, day, beginhr, finishhr from users_events, events WHERE users_events.idevent = events.idevent and users_events.idusr = 1
