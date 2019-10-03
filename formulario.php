<?php 
require("conexion.php"); 
if(isset($_POST['guardar'])){
    
    $input  =  array();
    for ($i=0; $i <10 ; $i++) { 
        if(!$_POST[$i]  )$input[$i]= $_POST[$i]  ; 
    }
    var_dump($input);

}




require 'formularioP.php'; 











