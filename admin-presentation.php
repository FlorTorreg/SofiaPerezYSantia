<?php

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$parrafo = $_POST["parrafo"];
$fecha = time();

include('./inc/conexion.php');
$conexion=mysqli_connect($server,$userMySQL,$passMySQL,$db) or die("Error de conexion :(");

$query1=$conexion->prepare("UPDATE presentaciones SET titulo = ?, parrafo = ?, fecha = FROM_UNIXTIME(?) WHERE id = '$id'");
$query1->bind_param("ssi", $titulo, $parrafo, $fecha);
$actualizado=$query1->execute();

header("Location: ./admin.php?success=".$actualizado);

?>