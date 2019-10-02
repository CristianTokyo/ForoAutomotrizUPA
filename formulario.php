<?php 
require("conexion.php"); 
mb_internal_encoding("UTF-8");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");
$select = $conexion->prepare(
    "SELECT  ename,beginhr,finishhr  FROM  events a inner join types v using(idtype)
     group by beginhr,finishhr"
); 
$select->execute(); 
$resultado = $select->fetchAll(); 



require 'contact.php'; 











