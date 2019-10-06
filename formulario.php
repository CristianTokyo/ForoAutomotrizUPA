<<<<<<< HEAD
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


=======
<?php
require("conexion.php");
require("validate.php");
session_start(); //Obtiene los resultados de la sesión

if(!empty($_POST)){
  if(isset($_POST['guardar']))
  {
    $eventos  =  array();
    $postArreglo = array(1,2,3,4,5,6,7,8,9,10,11,12);

    //Obtiene los eventos seleccionados
    foreach ($postArreglo as $postNombre) {
      if (array_key_exists($postNombre, $_POST)){
        $eventos[] = $_POST[$postNombre];
      }
    }
>>>>>>> 17ac4230d7806f2125f372c3581eafa37078ada8

    //Obtiene el idusr de la base de datos de la persona logeada
    $correo = $_SESSION['participante'];
    $nip = $_SESSION['clave'];
    $sql = "select idusr from users where email = '$correo'"; //falta un and al password
    if ($result = mysqli_query($conexion, $sql)){
      $row   = mysqli_fetch_row($result);    }

    //Inscribe al participante en las actividades
    foreach ($eventos as $key => $value) {
      $sql = "insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, '$row[0]','$value')";
      $result = mysqli_query($conexion, $sql);
    }
  }
}

require 'formularioP.php';

//insert into `events`.`users_events` (`idusrevent`,`idusr`,`idevent`) values (null, 1,1);
//select idusr from users where email = "luis.ernesto.anaya@upa.edu.mx";
