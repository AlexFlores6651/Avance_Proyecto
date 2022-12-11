<?php
    session_start();
    ob_start();

    $nombreA = 'Admin';
    $nombreT = 'Administrador';

    if(!isset($_SESSION['Nombre'])){
        include "../encabezado4.php";
    }else{
        if($_SESSION['Nombre'] == $nombreA && $_SESSION['Tipo'] == $nombreT){
            include "../encabezado6.php";
        }else{
            include "../encabezado5.php";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Login Form - Modal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel="stylesheet" href="./style_recu.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Recuperacion de Cuenta</h1>
            </div>
            <div class="form-content">
                <form action="correo2.php" method="post">
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Ingresa tu email" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Suscribir ahora</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-panel two">
            <div class="form-header">
                <h1>Iniciar Sesion</h1>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required="required" />
            </div>
            <div class="form-content">
                <form action="" method="">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <button type="submit">Iniciar Sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
    <script src="./script_recu.js"></script>

    <?php include_once "../pie.php" ?>


</body>

</html>