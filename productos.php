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
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        <a class="button is-success" href="agregar_producto.php"> Nuevo &nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Precio Oferta</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto->nombre ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <td>$<?php echo number_format($producto->precio, 2) ?></td>
                        <td><?php echo $producto->existencia?></td>
                        <td><?php
                            if( $producto->oferta == 0 || $producto->oferta == null){
                                echo " ";
                            }else{
                                echo "$".number_format($producto->precio_oferta, 2);
                            }
                        ?></td>
                        <td>
                            <?php if($producto->categoria == 0){
                                echo 'Anime';
                            }else{
                                echo 'Videojuegos';
                            } 
                            ?>
                        </td>
                        <td>
                            <img src="data:image/jpg;base64,<?php echo base64_encode($producto->imagen); ?>" alt="Imagen Producto" width="100px" />
                        </td>
                        <td>
                            <form action="editar_producto.php" method="post">
                                <input type="hidden" name="id_prod" value="<?php echo $producto->id ?>">
                                <button class="btn btn-primary">
                                    <!-- <i class="fa fa-trash-o"></i> -->
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="eliminar_producto.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="button is-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "pie.php" ?>


</body>
</html>
