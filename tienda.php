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
    include_once "filtro_tienda.php";
    $productos = obtenerProductos();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Proyecto</title>
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
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2" align="center">Tienda</h2>
        </div>
    </div>
    <div class="columns">
        <?php foreach ($productos as $producto) { ?>
            <div class="colum_card">
            <div class="card" style="width: 13rem; height:auto;">
                <div class="imageen">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($producto->imagen); ?>" alt="Imagen Producto" class="card-img-top" height="50px"/>
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
</body>
</html>