<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a7599d4d30.js" crossorigin="anonymous"></script>


    <title>Avance Proyecto Carrito Compras</title>

    <style>
        a{
            color:aliceblue;
        }
        h4{
            color: white;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php">
                <h4 class="title_menu">
                    <i class="fa-sharp fa-solid fa-gamepad fa-1x"></i>
                    The RockGames
                </h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tienda.php" style="color:white;">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php" style="color:white;">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca.php" style="color:white;">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php" style="color:white;">Contáctanos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                        Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="color:aliceblue;">Anime</a></li>
                            <li><a class="dropdown-item" href="#" style="color:aliceblue;">Videojuegos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="ver_carrito.php" class="button is-success">
                                <strong>Carrito<?php
                                                    include_once "funciones.php";
                                                    $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                    if ($conteo > 0) {
                                                        printf("(%d)", $conteo);
                                                    }
                                                    ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item">
                    <div class="buttons">
                            <a target="_blank" rel="noreferrer" href="" class="button is-primary">
                                <strong>Soporte y ayuda</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>