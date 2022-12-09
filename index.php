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
        <title>The RockGames</title>
        <link rel="icon" type="images/x-icon" href="./images/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6016fc16b2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./graficos/estilosPagP.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Libre Baskerville', serif;
                background-image: radial-gradient(#50d1d6, #003554);
                background-position: center;
                color: black;
            }
        </style>

    </head>

    <body>
        <br>
        <br>
        <h1>
            <center>Tienda de videojuegos y anime</center>
        </h1>
        <p>
            <center>Si estás buscando la mejor tienda de videojuegos en México para comprar juegos digitales de consola o PC, que sepas que has encontrado la mejor tienda donde comprar online. Aquí vas a poder adquirir juegos para tu computadora, Xbox, PlayStation o Nintendo a los mejores precios. Miles de juegos a la venta te esperan. Al igual que los mejores productos de anime al mejor precio y calidad.</center>
        </p>

        <br>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext"></div>

                <a href="#"><img src="Imagenes/img4.jpg" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="#"><img src="Imagenes/imagen2.jpg" style="width:100%"></a>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="#"><img src="Imagenes/image1.png" style="width:100%"></a>
            </div>
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <a href="#"><img src="Imagenes/img5.jpg" style="width:100%"></a>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 1500); // Change image every 1.5 seconds
            }

        </script>
        <br>
        <br>
        <br>


        <h1>
            <center>Videojuegos</center>
        </h1>
        <div id="container">
            <div id="servicios">

                <div class="card">
                    <div class="cardheader">
                        <img class="hove" src="Imagenes/Juego1.png" alt="" />
                    </div>
                    <div class="card-body">

                        <h2>
                            Grand Theft Auto V Rockstar Games Launcher Key GLOBAL
                        </h2>
                        <br>
                        <p>
                            $220.00
                        </p>
                        <a href="#">Comprar</a>

                    </div>
                </div>
                <div class="card">
                    <div class="cardheader">
                        <img lass="hove" src="Imagenes/Juego2.png" alt="" />
                    </div>
                    <div class="card-body">

                        <h2>
                            Darksiders 2 (Deathinitive Edition) Steam Key GLOBAL
                        </h2>
                        <br>
                        <br>
                        <p>
                            $320.00
                        </p>
                        <a href="#">Comprar</a>

                    </div>
                </div>
                <div class="card">
                    <div class="cardheader">
                        <img lass="hove" src="Imagenes/imagen3.png" alt="" />
                    </div>
                    <div class="card-body">
                        <h2>
                            Total War: WARHAMMER II Steam Key GLOBAL
                        </h2>
                        <br>
                        <br>
                        <br>
                        <p>
                            $292.00
                        </p>
                        <a href="#">Comprar</a>

                    </div>
                </div>
                <div class="card">
                    <div class="cardheader">
                        <img lass="hove" src="Imagenes/imagen4.png" alt="" />
                    </div>
                    <div class="card-body">
                        <h2>
                            GRID 2 Steam Clave GLOBAL
                        </h2>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>
                            $333.21
                        </p>
                        <a href="#">Comprar</a>

                    </div>
                </div>
            </div>
            <br>
            <br>

            <h1>
                <center>Productos</center>
            </h1>
            <div id="container">
                <div id="servicios">

                    <div class="card">
                        <div class="cardheader">
                            <img class="hove" src="Imagenes/Prod2.png" alt="" />
                        </div>
                        <div class="card-body">

                            <h2>
                                Versión de dibujos animados de Naruto Anime figura de acción
                            </h2>
                            <br>
                            <p>
                                $210.20
                            </p>
                            <a href="#">Comprar</a>

                        </div>
                    </div>
                    <div class="card">
                        <div class="cardheader">
                            <img lass="hove" src="Imagenes/Prod1.png" alt="" />
                        </div>
                        <div class="card-body">
                            <h2>
                                Conjunto de 7 pulseras de anime
                            </h2>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p>
                                $150.00
                            </p>

                            <a href="#">Comprar</a>

                        </div>
                    </div>
                    <div class="card">
                        <div class="cardheader">
                            <img lass="hove" src="Imagenes/Prod3.png" alt="" />
                        </div>
                        <div class="card-body">
                            <h2>
                                Demon Slayer Merch - Juego de artículos de anime
                            </h2>
                            <br>
                            <br>
                            <br>
                            <p>
                                $392.50
                            </p>
                            <a href="#">Comprar</a>

                        </div>
                    </div>
                    <div class="card">
                        <div class="cardheader">
                            <img lass="hove" src="Imagenes/Prod4.png" alt="" />
                        </div>
                        <div class="card-body">
                            <h2>
                                GSJDD Anime Kuromi Plush Toys, Animals Figura de Peluche
                            </h2>
                            <p>
                                $96.15
                            </p>
                            <a href="#">Comprar</a>

                        </div>
                    </div>

                </div>

                <br>

                <p>
                    <center>La mejor tienda de juegos y articulos de anime de México en la que vas a poder comprar de forma rápida y segura está solo unos clicks de distancia. Aquí vas a poder reservar tus juegos para Xbox One, Ps4, Xbox 360, Ps3, Switch o Steam con toda la comodidad. Podrás pagar con tarjeta y pagos por medio del Oxxo, asi donde quiera que estés a cualquier hora del día y la noche. Miles de clientes fieles que han adquirido juegos y articulos de anime, que están a la venta en nuestra tienda online en México, nos avalan. También contamos con miles de opiniones positivas, ya que The RockGames es muy seguro</center>
                </p>
                <br>
                <br>


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

                            <p>REDES SOCIALES</p>

                            <a class="link2" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="link2" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </footer>
    </body>

</html>



