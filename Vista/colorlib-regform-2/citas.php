<?php

include ("../conexioncita.php");

if (isset($_POST['registrarcita'])){
    

        $nombre = trim ($_POST['nombre']);
        $documento = trim ($_POST['documento']);
        $fecha_cita = date ("d/m/y");
        $jornada = trim ($_POST['jornada']);
        $consulta = "INSERT INTO `citas`(`nombre_usuario`, `documento`, `fecha_cita`, `jornada`) VALUES ('$nombre','$documento','$fecha_cita','$jornada')";
        $resultado = mysqli_query($conexion,$consulta);
     
}


?>