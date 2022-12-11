<?php

    session_start();
    ob_start();

    $nombreA = 'Admin';
    $nombreT = 'Administrador';

    if(!isset($_SESSION['Nombre'])){
        include "encabezado.php";
    }else{
        if($_SESSION['Nombre'] == $nombreA && $_SESSION['Tipo'] == $nombreT){
            include "encabezado3.php";
        }else{
            include "encabezado2.php";
        }
    }

    include_once "funciones.php";
    $productos = obtenerProductos();


    $_SESSION['name'] = $_POST['nom_rec'];
    $_SESSION['pa'] = $_POST['ap'];
    $_SESSION['ma'] = $_POST['am'];
    $_SESSION['dire'] = $_POST['dir'];
    $_SESSION['in'] = $_POST['ni'];
    $_SESSION['en'] = $_POST['ne'];
    $_SESSION['cp'] = $_POST['cop'];
    $_SESSION['mu'] = $_POST['mun'];
    $_SESSION['es'] = $_POST['est'];
    $_SESSION['nt'] = $_POST['no_tarjeta'];
    $_SESSION['trans'] = $_POST['transfer'];

    /*
    echo '<h3> N </h3>';
    echo $_SESSION['name'];
    echo '<h3> N </h3>';
    echo $_SESSION['pa'];
    echo '<h3> N </h3>';
    echo $_SESSION['ma'];
    echo '<h3> N </h3>';
    echo $_SESSION['dire'];
    echo '<h3> N </h3>';
    echo $_SESSION['in'];
    echo '<h3> N </h3>';
    echo $_SESSION['en'];
    echo '<h3> N </h3>';
    echo $_SESSION['cp'];
    echo '<h3> N </h3>';
    echo $_SESSION['mu'];
    echo '<h3> N </h3>';
    echo $_SESSION['es'];
    echo '<h3> N </h3>';
    echo $_SESSION['nt'];
    echo '<h3> N </h3>';
    echo $_SESSION['trans'];
    echo '<h3> N </h3>';

    */


?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin Compra</title>
</head>
<body>
    
    <h2 align="center"><span style="color:red">FELICIDADES !!</span></h2>
    <br>

    <button class="button is-success" value="Volver"><a href="final.php" style="color:white; text-decoration:none;"> Terminar Compra  </a></button>
    <button class="button is-warning" value="Volver"><a target="_blank" href="ticket.php" style="color:white; text-decoration:none;">Generar Ticket de Compra </a></button>

    <br>
    <br>





    <?php include_once('pie.php') ?>
</body>
</html>