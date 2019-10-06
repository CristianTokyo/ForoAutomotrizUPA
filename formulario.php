<?php  session_start(); 
require("conexion.php"); 
if(isset($_POST['guardar'])){
    $input  =  array();
    $cont = 0; 
    for ($i=0; $i <10 ; $i++) { 
         if($_POST[$i] != null) {
             $input[$cont]= $_POST[$i] ; 
             $cont++;   
        } 
    }
    var_dump($input); 
    if(sizeof($input) == 0)  echo "<script> alert('Elija alguno de los talleres');  </script>" ; 
    else{
        
        for ($j=0; $j < sizeof($input) ; $j++) { 
            $insert= $conexion->prepare(
                "INSERT INTO users_events  VALUES   (null,:usuer,:idEvent)"
            );
            $insert->execute(
                array(
                    ":usuer"=>$_SESSION['id'],
                    ":idEvent"=>$input[$j]
                )
            ) ;   
        }
        header("location: formulario.php"); 
    }



}
if(isset($_POST['guardar27'])){
    $input  =  array();
    $cont = 0; 
    for ($i=0; $i <9 ; $i++) { 
         if($_POST[$i] != null) {
             $input[$cont]= $_POST[$i] ; 
             $cont++;   
        } 
    }
    var_dump($input); 
    if(sizeof($input) == 0)  echo "<script> alert('Elija alguno de los talleres');  </script>" ; 
    else{
        for ($j=0; $j < sizeof($input) ; $j++) { 
            $insert= $conexion->prepare(
                "INSERT INTO users_events  VALUES   (null,:usuer,:idEvent)"
            );
            $insert->execute(
                array(
                    ":usuer"=>$_SESSION['id'],
                    ":idEvent"=>$input[$j]
                )
            ) ;   
        }
        header("location: formulario.php"); 
    }



}




require 'formularioP.php'; 











