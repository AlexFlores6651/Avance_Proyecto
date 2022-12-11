<?php

    session_start();
    ob_start();

    $nombreA = 'Admin';
    $nombreT = 'Administrador';

    if(!isset($_SESSION['Nombre'])){
        include "./encabezado4.php";
    }else{
        if($_SESSION['Nombre'] == $nombreA && $_SESSION['Tipo'] == $nombreT){
            include "./encabezado6.php";
        }else{
            include "./encabezado5.php";
        }
    }

    include_once "funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Graficas</title>
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <script src="../librerias/jquery-3.3.1.min.js"></script>
    <script src="../librerias/plotly-latest.min.js"></script>
    <link rel="icon" type="images/x-icon" href="../images/favicon.png">
     <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6016fc16b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilosPagP.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
     <style>
        body {
            font-family: 'Libre Baskerville', serif;
            background-image: radial-gradient(#50d1d6, #003554);
            background-position: center;
            color: black;

        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading"><h1><center>Graficas de ventas de The RockGames</center></h1></div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargaLineal"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="cargaBarras"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <footer class="piePagina">
                <div class="grupo1">
                    <div class="box">
                        <br>
                        <br>
                        <br>
                        <h2>CONTACTANOS</h2>
                        <p>Via Email de Lunes a Domingo</p>
                        <p>de 07:00 a 22:00hrs.</p>
                        <p>servicioalcliente_TheRockGames@gmail.com</p>

                        <p>Llamanos de Lunes a Viernes</p>
                        <p>de 10:00 a 16:00 hrs.</p>
                        <p>Telefono: 55 6836 9988</p>
                        <br>
                        <br>
                    </div>
                    <br>
                    <br>
                    <div class="box">
                        <br>
                        <br>
                        <br>

                        <h2>REDES SOCIALES</h2>


                        <a class="link2" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="link2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>



                    </div>
                </div>
            </footer>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
   $('#cargaLineal').load('lineal.php');
   $('#cargaBarras').load('barras.php'); 
});
</script>
