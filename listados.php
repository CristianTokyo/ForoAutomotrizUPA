
<?php
require("conexion.php");
require("validate.php");


session_start(); //Obtiene los resultados de la sesión
if ($_SESSION['nombre'] == 'administrador') {   //asegurar que esta logeado el admin
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


  if (!empty($_POST)) {
    if (isset($_POST['listas'])) {
      $idevento = $_POST['idevento'];
      $sql = "SELECT nombre FROM users_events e, users u where e.idusr = u.idusr and idevent = '$idevento' order by nombre";
      if ($result = mysqli_query($conexion, $sql))
        if (!mysqli_num_rows($result))
          $participantes = array();
        else
          while ($rows = $result->fetch_assoc())
            $participantes[] = $rows;

      $sql = "SELECT CONCAT(type, ' ',ename), idevent FROM events inner join types using(idtype) where idevent = $idevento";
      if ($result = mysqli_query($conexion, $sql))
        $eventoSeleccionado = mysqli_fetch_row($result);
    }

    if (isset($_POST['listado'])) {
      require('fpdf/fpdf.php');
      $id = $_POST['id'];
      $ename = $_POST['ename'];

      class PDF extends FPDF{
        function Header(){
          global $ename;
          $this->Image('images/LogoForo.png',10,8,40);
          $this->SetFont('Arial', 'b', 14);
          $this->Cell(40,10,'',0,0);
          $this->MultiCell(0,10,$ename,0,'C');
          $this->Ln(20);
        }

        function Footer(){
          $this->SetY(-20);
          $this->SetFont('Arial', 'I', 10);
          $this->Cell(0,10,'Pag. '.$this->PageNo(),0,0,'R');
        }
      }


      $pdf = new PDF();

      $pdf->AddPage();
      $pdf->SetFont('Arial', '', 14);
      $pdf->Cell(20, 10, 'No.', 1, 0, 'C');
      $pdf->Cell(140, 10, 'Nombre', 1, 0, 'C');
      $pdf->Cell(30, 10, 'Asistencia', 1, 1, 'C');
      $pdf->SetFillColor(0, 0, 0);
      $pdf->SetFont('Arial', '', 10);
      $c = 1;
      $query = mysqli_query($conexion, "select nombre from users inner join users_events using(idusr) where idevent=$id order by nombre");
      while ($r = mysqli_fetch_array($query, MYSQLI_BOTH)) {
        $pdf->Cell(20, 5, $c, 1, 0, 'C');
        $pdf->Cell(140, 5, utf8_decode($r[0]), 1, 0, 'L');
        $pdf->Cell(30, 5, '', 1, 1, 'C');
        $c++;
      }
      $pdf->Output('D', $ename . '.pdf');
    }
  }
}
require('listadosP.php');
//Genera el listado de participantes en el evento
function listadoParticipantes($participantes, $eventoSeleccionado)
{
  echo "<h2>" . $eventoSeleccionado[0] . "</h2>";
  echo "<table  class='table table-bordered table-hover' id = 'tablaListas'>";
  echo "<thead class = 'thead-dark'>";
  echo "<tr style='text-align: center'>";
  echo "<th> # </th>";
  echo "<th> Nombre</th>";
  echo "<th> Asistió </th></th></thead><body>";
  foreach ($participantes as $key => $value) {
    $idev = $key + 1;
    echo "<tr><td>" . $idev . "</td>";
    echo "<td>" . $participantes[$key]['nombre'] . "</td>";
    echo "<td></td></tr>";
  }
  echo '<input type="hidden" name="id" value=' . $eventoSeleccionado[1] . '>';
  echo '<input type="hidden" name="ename" value="' . $eventoSeleccionado[0] . '">';
}

//Genera el listado de opciones de eventos para generar la lista
function listadoEventos($eventos)
{
  foreach ($eventos as $key => $value) {
    $idev = $key + 1;
    echo "<option value =" . $idev . ">" . $eventos[$key]['day'] . " Nov -";
    echo $eventos[$key]['ename'] . "</option>";
  }
}
