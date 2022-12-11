<?php

    session_start();
    ob_start();

    $nombreA = 'Admin';
    $nombreT = 'Administrador';

    if(!isset($_SESSION['Nombre'])){
        include "./encabezado.php";
    }else{
        if($_SESSION['Nombre'] == $nombreA && $_SESSION['Tipo'] == $nombreT){
            include "./encabezado3.php";
        }else{
            include "./encabezado2.php";
        }
    }

    include_once "funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Graficas</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script src="librerias/plotly-latest.min.js"></script>
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
     
    <?php include_once("./pie.php") ?>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#cargaLineal').load('lineal.php');
        $('#cargaBarras').load('barras.php');
        });
    </script>

</body>
</html>

