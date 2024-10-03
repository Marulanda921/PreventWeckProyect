<?php

require "conex.php";

session_start();

if ($_POST) {

$email=$_POST['email'];
$contraseña=$_POST['txtpass'];

$sql= "SELECT id_usuario,nombre_usuario,tipo_usuario,tipo_documento,documento,email,contraseña FROM usuarios WHERE email='$email'";
$conexion = mysqli_connect($server,$user,$pass,$basedatos);
$resultado = mysqli_query($conexion, $sql);
$num= $resultado->num_rows;

if ($num>0){

   $row = $resultado->fetch_assoc();
   $password_bd  =$row["contraseña"];
   $pass_c = $contraseña;

   if($password_bd== $pass_c){

       $_SESSION ["nombre_usuario"] = $row ["nombre_usuario"];
       $_SESSION ["id_usuario"] = $row ["id_usuario"];
       $$_SESSION ["tipo_usuario"] = $row ["tipo_usuario"];

       header("location:principal.php");

   }
   else {
       echo "La contraseña es incorrecta";
   }

}
else{
   echo "No existe el usuario";
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1554/1554906.png">
    <link rel="stylesheet" href="principal.css">
    <link rel="stylesheet" href="logincss.css">
    <link rel="stylesheet" href="other.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    <title>PreventWeck</title>
</head>

<body>
    <header>
        <a href="" class="logo">PreventWeck</a>
        <div class="menuToggle" onclick="toggleMenu();" ></div>
        <ul class="navegacion">
            <li><a href="index.html">Volver al menú principal</a></li>
        </ul>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main class="main">
        <section class="page-wrapper">
            <div class="page-heading-login">
                <h3 class="section-title"> ¡Bienvenido!</h3>
            </div>
            <br> <br>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="login-form">
                <div class="form-field-wrapper">
                    <label>Correo electrónico</label>
                    <input 
                    type="email" 
                    class="text-box" 
                    name="email" 
                    placeholder="Ingresa tu correo electrónico" 
                    autocomplete="off"
                    required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> 
                </div>
                <br> <br>
                <div class="form-field-wrapper">
                    <label>Contraseña</label>
                    <input 
                    type="password" 
                    class="text-box" 
                    name="txtpass" 
                    placeholder="Ingresa tu contraseña" 
                    autocomplete="off"
                    required> 
                </div>
                <br> <br>
                <div class="form-action">
                    <button class=" custom-button default-button" type="submit" value="ingreso"> INGRESAR</button>
                </div>
            </form>
        </section>
    </main>
    <br> 
    <br>
    <div class="registrar">
        <h4>¿Aún no tienes cuenta? <a href="../Vista/registro.html">Regístrate Aquí</a> </h4>
    </div>
    <br> <br>
    <br> <br>
    <br> <br>
    <div class="copyrightText">
        <p>Copyright 2021 PreventWeck <a href="https://concejodemedellin.edu.co/">IECM </a>todos los derechos reservados.</p>
        </div>
    
    
        <script type="text/javascript">
            window.addEventListener("scroll", function () {
                const header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
    
            });
    
            function toggleMenu(){
                const menuToggle = document.querySelector(".menuToggle");
                const navegacion = document.querySelector(".navegacion");
                menuToggle.classList.toggle("active");
                navegacion.classList.toggle("active");
            }
        </script>
</body>
</html>
