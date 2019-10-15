
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
  $participante = $_SESSION['nombre'];
  $sql = "select idusr from users where email = '$correo'"; //falta un and al password
  if ($result = mysqli_query($conexion, $sql))
    $row   = mysqli_fetch_row($result);

  $numUsuario = $row[0];

  //si el cupo esta lleno  el evento se omite
  $sql = "select e.idevent from (select idevent, count(idevent) cuenta from users_events group by idevent HAVING count(idevent)>0) tmp, events e WHERE e.idevent = tmp.idevent and tmp.cuenta >= e.size";
  if ($result = mysqli_query($conexion,$sql)){
  if (!mysqli_num_rows($result)){
    $eventosLlenos = array();
    $listaLlenos = array();}
  else{
    while ($rows = $result->fetch_assoc())
      $eventosLlenos[] = $rows;

    foreach ($eventosLlenos as $key => $value) {
        $testEvent = $eventosLlenos[$key];
        $listaLlenos[] = $testEvent['idevent'];
      }
    }
  }

  //Lista de eventos en session
  $_SESSION['tags'] = array(1=>0,2=>0, 3=>0, 4=>0,5=>0,6=>0,7=>0,8=>0,9=>0,10=>0,11=>0,12=>0,
                              13=>0, 14=>0,15=>0,16=>0,17=>0);
  //Omitir los llenos
  foreach ($listaLlenos as $key => $value)
    $_SESSION['tags'][$listaLlenos[$key]] = 1;

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

  //si ya tiene eventos seleccionados se omiten
  foreach ($listaEventos as $key => $value)
        $_SESSION['tags'][$listaEventos[$key]] = 1;


  if(!empty($_POST)){
    if(isset($_POST['guardar'])) //Viene del formulario
    {
      $eventos  =  array();
      //Obtiene los eventos seleccionados
      foreach ($postArreglo as $postNombre) {
        if (array_key_exists($postNombre, $_POST))
          $eventos[] = $_POST[$postNombre];}

        //Inscribe al participante en las actividades seleccionadas
        //Revisar que el usuario no este incrito en ese evento y lo inscribe
      foreach ($eventos as $key => $value) {
        $sql ="select idusr FROM users_events where idusr = '$numUsuario' and idevent = '$value'";
        $result = mysqli_query($conexion, $sql);
        if (!mysqli_num_rows($result)){
          $sql = "insert into `foroaut1_events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$numUsuario','$value')";
          $result = mysqli_query($conexion, $sql);}
      }

      //Obtiene el horario completo del usuario
      $sql = "SELECT ename, manager, day, beginhr, finishhr from users_events, events
              WHERE users_events.idevent = events.idevent and users_events.idusr = '$numUsuario' order by events.idevent";
      if($resultado = mysqli_query($conexion, $sql))
        if (!mysqli_num_rows($resultado))
          $horario = array();
        else
          while ($rows   = $resultado->fetch_assoc())
            $horario[] = $rows;


      if ($horario != NULL && $eventos != NULL) //Si el usuario no está inscrito a nada no manda correo ni adjunta a la db
      {

        $cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                  <html xmlns="http://www.w3.org/1999/xhtml">
                  <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                  <meta name="viewport" content="width=device-width, initial-scale=1"/>
                  <style type="text/css">
                  h1{color: ##0093CA;}
                  p{font-size: 1rem; }
                  img{
                      width: 10rem;
                      height: 10rem;}
                  </style></head>';
        $cuerpo .= "<h1>".$participante."</h1>";

        $cuerpo .= '<h2>Bienvenido al Foro Internacional de la Industria Automotriz Ags-UPA</h2>
                  <p>Estos son las actividades a las que estás inscrito:<br></p>';
        $cuerpo .= '<table border = "1">
            <thead>
              <tr style="text-align: center">
                <th>Actividad</th>
                <th>Expositor</th>
                <th>Día</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
              </tr>
          </thead><tbody>';

        foreach ($horario as $key => $value) {
            $cuerpo .= '<tr style="text-align: center"><td>'.$horario[$key]['ename']."</td>";
            $cuerpo .= "<td>".$horario[$key]['manager']."</td>";
            $cuerpo .= "<td>".$horario[$key]['day']." Nov </td>";
            $cuerpo .= "<td>".$horario[$key]['beginhr']."</td>";
            $cuerpo .= "<td>".$horario[$key]['finishhr']."</td></tr>";
        }

        $cuerpo .= '</tbody></table>';
        $cuerpo .= '<p>Te esperamos.</p>';
        $cuerpo .= '<img src = "images/logo_foroAutomotriz.png"';

        $asunto  = "Eventos del Foro Automotriz";

        require("includes/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->From = "registro@foroautomotrizags-upa.com"; //Revisar direccion
        $mail->FromName = "Registro Foro Automotriz AGS-UPA";
        $mail->AddAddress($correo);
        $mail->AddBCC("registro@foroautomotrizags-upa.com");
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $cuerpo;
        $mail->AddEmbeddedImage('images/logo_foroAutomotriz.png');
        $mail->CharSet = 'UTF-8';  

        //SMT Server
        $mail->IsSMTP();
        $mail->Host = 'mail.foroautomotrizags-upa.com';
        $mail->Port = 2525;
        $mail->SMTPAuth = true;
        $mail->Username = 'registro@foroautomotrizags-upa.com';
        $mail->Password = 'registro_upa';


        if($mail->Send()){
          echo "<script>";
          echo "alert('Datos guardados, revise su correo');";
          echo "window.location = 'index.html';";
          echo "</script>";}
        else
          echo 'Mailer Error: '.$mail->ErrorInfo;
        }
    }
  }
}
require 'formularioP.php';

//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
//"<?php $_POST['$tag1_saved'] == 'True'? '':'checked';

//SELECT ename, manager, day, beginhr, finishhr from users_events, events WHERE users_events.idevent = events.idevent and users_events.idusr = 1
//select idevent, count(idevent) from users_events group by idevent HAVING count(idevent)>0
//select idevent, size from events

//select e.idevent from (select idevent, count(idevent) cuenta from users_events group by idevent HAVING count(idevent)>0) tmp, events e WHERE e.idevent = tmp.idevent and tmp.cuenta >= e.size
