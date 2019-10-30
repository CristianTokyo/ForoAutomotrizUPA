<?php
require("conexion.php");
echo " <form method='POST'>";
echo "<button type='submit' name='mandar'>Mandar Correo </button>";
echo " </form>";
if(isset($_POST['mandar'])){
    $query = "SELECT idusr,nombre,email,pass,sent  FROM  users where  sent = 0";
    $resultado = mysqli_query($conexion,$query);  
    foreach ($resultado as $op  ) {
        //Ejemplo
      /*  $para      = 'nobody@example.com';
        $titulo    = 'El título';
    $mensaje   = 'Hola';
    $cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($para, $titulo, $mensaje, $cabeceras);
    */
        $id = $op['idusr']; 
      //  mail($op['email'],'Foro automotriz', $op['pass'], $cabeceras);//No jala si no está en el servidor
      $update = "UPDATE users set sent = 1 where idusr = $id "; 
      $resultado = mysqli_query($conexion,$update);  
    }
    echo "<script>alert('Correos Enviados') </script>"; 

}

?>