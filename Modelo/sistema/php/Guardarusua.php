<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['Guardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Nombre = $_POST['nombre'];
	$Apellidos = $_POST['apellido'];
	$telefono = $_POST['telefono'];


	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO  usuarios (Nombres, Apellidos, Telefono) VALUES ('$Nombre', '$Apellidos', '$telefono')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('El registro se guardó exitosamente');
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>