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



<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The RockGames</title>
    <link rel="icon" type="images/x-icon" href="./images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6016fc16b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    
    <style>

        .columns{
            padding-left: 20px;
            padding-right: 20px;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }
        body{
            width: 100%;
            height: 100%;
        }
        .columns .colum_card{
            padding-left: 20px;
            padding-right: 20px;
            overflow:hidden;
        }

        img:hover{
            -webkit-transform:scale(1.3);transform:scale(1.3);
        }
        .columns.imageen{
            max-height: 250px;
            overflow: hidden;
        }
        .imageen{
            height: 250px;
            overflow: hidden;
        }
    </style>

</head>

<body>
    <h2><center>Anime y Videojuegos, La Armonia Perfecta</center></h2>
    <p align="center">
        Pagina de venta de Videojuegos y contenido de Anime, seas otaku, friki o usuario casual, disfrutaras comprar productos en esta tienda.
    </p>

    <!-- Carrusel de Imagenes -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./images/anime.jpg" class="d-block w-80" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./images/games.jpg" class="d-block w-90" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./images/videojuegos.png" class="d-block w-80" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="columns">
        <div class="column">
            <h2 class="is-size-2" align="center">Productos</h2>
        </div>
    </div>
    <div class="columns">
        <?php foreach ($productos as $producto) { ?>
        <div class="colum_card">
            <div class="card" style="width: 13rem; height:auto;">
                <div class="imageen">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($producto->imagen); ?>" alt="Imagen Producto" class="card-img-top" height="50px" />
                </div>
                <div class="card-body">
                    <h4 class="card-title" style="color: black;"><?php echo $producto->nombre; ?></h4>
                    <p class="card-text" style="color: gray;"><?php echo $producto->descripcion; ?></p>
                    <?php if($producto->oferta){?>
                    <h5 align="center" class="card-title"> OFERTA!!</h5>
                    <p>Precio Original: <span style="color:red"><del> $ <?php echo $producto->precio; ?> </del> </span> </p>
                    <h6>Precio Oferta: $ <?php echo number_format($producto->precio_oferta,2); ?> </h6>
                    <?php }else{ ?>
                    <h6> Precio: $<?php echo number_format($producto->precio, 2) ?> </h6>
                    <?php } ?>
                    <?php if($producto->existencia != 0){?>
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                    <form action="eliminar_del_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <label for="dan"> <i class="fa fa-check"></i>&nbsp; <span style="color: green;"> En el Carrito </span></label>
                        <button class="button is-danger" align="center" name="dan">
                            <i class="fa fa-trash-o"></i>&nbsp;Quitar
                        </button>
                    </form>
                    <?php } else { ?>
                    <form action="agregar_al_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <button class="button is-primary">
                            <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                        </button>
                    </form>
                    <?php } ?>
                    <?php }else{  ?>
                    <h3 class="card-title" style="color: RED;" align="center"> AGOTADO !!</h3>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <br>


    <?php include_once "pie.php" ?>

</body>
