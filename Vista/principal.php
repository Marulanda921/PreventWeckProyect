<?php

require "conex.php";

session_start();

if (!isset( $_SESSION ["id_usuario"])){

    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logomorado.png">
    <link rel="stylesheet" href="principal.css">
    <title>PreventWeck</title>
</head>

<body>
    <header>
        <a href="" class="logo">PreventWeck</a>
        <div class="menuToggle" onclick="toggleMenu();" ></div>
        <ul class="navegacion">
            <li><a href="anticonceptivos.html" onclick="toggleMenu();">Métodos</a></li>
            <li><a href="logout1.php" onclick="toggleMenu();">Salir</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>BIENVENIDO</h2>
            <br>
            <br>
            <p> Servicio de asesorías psicológicas sobre sexualidad para los estudiantes del IECM </p>
            <br>
            <br>
            <a href="colorlib-regform-2/cita.php" class="btn">¡PIDE TU CITA AQUÍ!</a>
        </div>
    </section>
    <section class="Nosotros" id="Nosotros">
        <div class="hilera">
            <div class="col50">
                <h2 class="titulo"><span>D</span>escubre los métodos anticonceptivos más usados:</h2>
                <br>
                <br>
                <br>
                <p>Los métodos anticonceptivos son diferentes formas para prevenir el embarazo. Hay muchos tipos de anticonceptivos, por lo que tienes varias opciones para elegir la adecuada para ti. Aquí encontrarás la información necesaria sobre cada uno de ellos. Estamos aquí para ayudarte. 
                </p>
                <br>
                <br>
                <br>
                <a href="anticonceptivos.html" class="btn">Mira más información</a>
                <br>
                <br><br><br><br><br><br>

            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="https://losanticonceptivos.com/wp-content/uploads/2018/11/46508982_569953390114886_4947500753863311360_n.jpg">
                </div>
            </div>
        </div>
    </section>

    


    

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
