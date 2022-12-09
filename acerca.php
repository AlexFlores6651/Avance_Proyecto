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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acerca de Nosotros</title>
    <link rel="stylesheet" href="css/grid.css">
</head>

<body>
    <div class="contenedor">
        <header class="header">
            <h2>Acerca de Nosotros</h2>
        </header>
        <main class="contenido">
            <p>
                Somos una pequeña empresa mexicana que busca comerciar productos de categoría de anime o videjuego, con precios accesibles para todo público.
                <br>
                <br>
                Para que nos conozcas un  poco más:
            </p>
        </main>
        <main class="vision">
            <p>
                <b>Visión: </b> Ser la compañía más centrada en el cliente del mundo, donde nuestros clientes pueden encontrar y descubrir cualquier cosa de estas categorías para que posteriormente lo puedan comprar en línea.
                Tratamos de mantener un enfoque centrado en el potencial comprador. Dicho cliente puede localizarse en cualquier parte del país de México, garantizando que podrá encontrar lo que quiera al momento de realizar una compra en línea.
            </p>
            <br>
           <center> <img src="images/vector_empresarial.jpg" width=200px> </center>
        </main>
        <main class="mision">
            <p>
                <b>Misión:</b> Nos esforzamos por brindar a nuestros clientes los precios más bajos posibles, la mejor selección disponible y la mayor comodidad.

                Así, como compañía proponemos dar a nuestros clientes los mejores beneficios en cuanto al precio y la variedad de productos. Pero además ofreciendo estas ventajas de forma cómoda para el usuario.
            </p>
            <center><img src="images/mision.jpg" width=200px></center>
        </main>
        <main class="objetivo">
            <p>
                <b>Objetivo: </b> Convertirnos en la compañía mundial que más se centra en el cliente. Intentamos buscar siempre dar respuesta a todas las inquietudes y dudas del cliente para poder facilitarle que pueda comprar cualquier cosa que necesite a través de nuestra plataforma online.

                Nuestro objetivo se centra en la creación de demanda de productos de estilo anime o videjuegos que no se consiguen fácilmente.

                Por lo tanto, con nuestra política de selección, precios económicos y envíos fiables y rápidos, nuestra visión, misión y objetivo nos centramos en el consumidor, buscando cumplir sus necesidades a través de la satisfacción.
            </p>
            <center><img src="images/objetivo.png" width=200px></center>
        </main>
        <aside class="sidebar">
            <h3>Ultima actualizacion del servidor:</h3>
            <br>
            <?php
            date_default_timezone_set("America/Mexico_City");
            echo date("F d Y H:i:s.", getlastmod());
            ?>
        </aside>
    </div>
</body>

</html>