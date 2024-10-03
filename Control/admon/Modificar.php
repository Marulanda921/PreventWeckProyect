<?php 
include 'conex.php';
$conexion = mysqli_connect($server,$user,$pass,$basedatos);
$id = $_GET["id"];
$sql1 = "SELECT * FROM usuarios WHERE Id_usuario = '".$id."'";
$result1 = mysqli_query($conexion,$sql1);
while ($filas = mysqli_fetch_array($result1)) {
    
?>


<div class="overlay">
<form>
   <div class="con">
    <link rel="stylesheet" href="css/formulario.css">
   <header class="head-form">
      <h2>Modificar</h2>
      <p>Aqui puedes modificar los campos de tu Usuario</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <input type="hidden" name="idespecifico" value="<?php echo $filas["id_usuario"] ?>" >
         <input class="form-input" id="txt-input" type="text" placeholder="Nombre" name="nombre" value="<?php echo $filas["nombre_usuario"] ?>" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="email" placeholder="email" id="pwd"  name="email" value="<?php echo $filas["email"] ?>" required>
      <br>
      <button class="log-in" type="submit" >Modificar</button>
   </div>
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>
  </div>
</form>
<?php } ?>
<script src="js/jm.js"></script>
</div>

<?php 
$id2=$_GET["idespecifico"];
$usuario=$_GET["nombre"];
$correo=$_GET["email"];


if ($usuario != null || $correo != null ) {
    $sql = "UPDATE `usuarios` SET `nombre_usuario`='".$usuario."',`email`='".$correo."' WHERE `id_usuario` = '".$id2."'";
	$result = mysqli_query($conexion, $sql);
        header("location:principal.php");
    }
?>


