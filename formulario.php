<?php
require("conexion.php");
//print_r($_POST);
if(!empty($_POST)){
  if(isset($_POST['dia1']))
  {
    $input  =  array();
    $postArreglo = array(1,2,3,4,5,6,7);

    foreach ($postArreglo as $postNombre) {
      if (array_key_exists($postNombre, $_POST)){
        $input[] = $_POST[$postNombre];
      }
    }

    foreach ($input as $key => $value) {
      echo "Evento ";
      echo $value;
      echo "<br>";
    }
  }
}
else
  echo "No existen POST";
require 'formularioP.php';
