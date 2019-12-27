<?php 

//Array POST
$nombre=$_POST['name'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

//funcion mail()
$dest="ftorregrossajeff@gmail.com";
$subject="Probando form con AJAX";
$envio=mail($dest,$subject,$mensaje);

//verificar el envio
if($envio){
echo "<h2>Gracias ".$nombre." por comunicarse</h2>";
}else{
    echo "error en el envio :(";
}

?>