<?php 


//Array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];

//funcion mail()
$dest="ftorregrossajeff@gmail.com";
$subject="Probando form con AJAX";
$mensaje="Mensaje de la web: sofiaperezysantia, Nombre:".$nombre." , Email: ".$email." , Mensaje:".$comentario;
$envio=mail($dest,$subject,$mensaje);


//verificar el envio
if($envio){
echo "<h2>Gracias ".$nombre." por comunicarse</h2>";
}else{
    echo "error en el envio :(";
}



?>