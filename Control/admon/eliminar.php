<?php 
include 'conex.php';
$conexion = mysqli_connect($server,$user,$pass,$basedatos);

$id = $_GET["id"];
$sql = "DELETE FROM usuarios WHERE Id_usuario = '".$id."'";
$result = mysqli_query($conexion,$sql);
header("location: principal.php");

?>