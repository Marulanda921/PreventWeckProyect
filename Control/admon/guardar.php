<?php
	

?>

<?php

include  'conex.php';
$conexion = mysqli_connect($server,$user,$pass,$basedatos);
$documento = $_GET["Documento"];
$TipoUsuario = $_GET["TipoUs"];
$TipoDocumento = $_GET["Tipodoc"];
$nombre= $_GET["Nombres"];
$correo = $_GET["Correo"];
$contra = $_GET["contraseña"];

if ($documento != null || $tipoUsuario != null || $tipoDocumento != null || $nombre != null || $correo != null || $contra != null) {
    $sql = "INSERT INTO usuarios(id_usuario,nombre_usuario,tipo_usuario,tipo_documento,documento,email,contraseña) value('',
    '".$nombre."','".$TipoUsuario."', '".$TipoDocumento."','".$documento."', '".$correo."','".$contra."')";
	$result = mysqli_query($conexion, $sql);
        header("location:principal.php");
    }

    

?>