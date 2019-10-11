
<?php
require("conexion.php");
require("validate.php");


session_start(); //Obtiene los resultados de la sesión
if ($_SESSION['nombre'] == 'administrador')
{   //asegurar que esta logeado el admin
  $correo = $_SESSION['participante'];
  $nip = $_SESSION['clave'];
  $participante = $_SESSION['nombre'];
  $sql = "select idusr from users where email = '$correo'"; //falta un and al password
  if ($result = mysqli_query($conexion, $sql))
    $row   = mysqli_fetch_row($result);

  $numUsuario = $row[0];
  $sql = "SELECT day, ename from events";
  if ($result = mysqli_query($conexion, $sql))
    while ($rows = $result->fetch_assoc())
      $eventos[] = $rows;


  if(!empty($_POST)){
    if(isset($_POST['listas'])){
      $idevento = $_POST['idevento'];
      $sql = "SELECT nombre FROM users_events e, users u where e.idusr = u.idusr and idevent = '$idevento'";
      if ($result = mysqli_query($conexion, $sql))
        if (!mysqli_num_rows($result))
          $participantes = array();
        else
          while ($rows = $result->fetch_assoc())
            $participantes[] = $rows;

      $sql = "SELECT ename FROM events where idevent = '$idevento'";
      if ($result = mysqli_query($conexion, $sql))
          $eventoSeleccionado = mysqli_fetch_row($result);

      echo "$eventoSeleccionado[0]";
    }
    if(isset($_POST['listado'])) //Viene del formulario gusrda la lista
    {

    }
  }
}
require('listadosP.php');

//Genera el listado de participantes en el evento
function listadoParticipantes($participantes, $eventoSeleccionado){
  echo "<h2> Evento '". $eventoSeleccionado[0]."'</h2>";
  echo "<table  class='table table-bordered table-responsive table-hover'>";
  echo "<thead class = 'thead-dark'>";
  echo "<tr style='text-align: center'>";
  echo "<th> # </th>";
  echo "<th> Nombre</th>";
  echo "<th> Asistió </th></th></thead><body>";
  foreach ($participantes as $key => $value) {
    $idev = $key+1;
    echo "<tr><td>".$idev."</td>";
      echo "<td>".$participantes[$key]['nombre']."</td>";
      echo "<td></td></tr>";
  }
}

//Genera el listado de opciones de eventos para generar la lista
function listadoEventos($eventos){
  foreach ($eventos as $key => $value) {
    $idev = $key + 1;
    echo "<option value =".$idev.">".$eventos[$key]['day']." Nov -";
    echo $eventos[$key]['ename']."</option>";
  }
}
