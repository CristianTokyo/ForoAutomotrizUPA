<?php
require("conexion.php");
if(isset($_POST['guardar'])){
    $input  =  array();
    for ($i=1; $i <8 ; $i++)
    {
        if($_POST[$i])
        {
          $input[$i]= $_POST[$i];
          echo "<br>";
          echo "dentro ";
          echo $input[$i];
        }
    }

    var_dump($input);

}

require 'formularioP.php';
