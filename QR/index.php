<?php
require 'phpqrcode/qrlib.php'; 
$dir  = 'temp/';
if(!file_exists($dir))// si no existe la carpeta 
    mkdir($dir);// se crea
    $filname = $dir.'test.png';  //es donde se va guardar el archivo
    //variables con los valores que va ir tomando 
    $tamanio = 10;// el tamaño de la imagen 
    $level = 'M'; //el tipo de presición 
    $framaSize = 3; //el marco que tiene el qr 
    $contenido = "Ya genera el cógido qr!!!!";// lo que va a mostrar el código qr 
    QRcode::png($contenido,$filname,$level,$tamanio,$framaSize); 
    echo '<img src="'.$filname.'"/>'; 


?>