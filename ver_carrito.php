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
    $productos = obtenerProductosEnCarrito();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compras</title>
</head>
<body>
    <?php
            if (count($productos) <= 0) {
    ?>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Todavía no hay productos
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para agregar productos a tu carrito
                </h2>
                <a href="tienda.php" class="button is-warning">Ver tienda</a>
            </div>
        </div>
    </section>
    <?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th> Nombre </th>
                        <th> Descripción </th>
                        <th> Precio </th>
                        <th> Precio Final </th>
                        <th> Imagen </th>
                        <th> Quitar </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $total = 0;
                        foreach ($productos as $producto) {
                            if($producto->oferta == 1){
                                $total += $producto->precio_oferta;
                            }else{
                                $total += $producto->precio;
                            }
                        ?>
                    <tr> 
                        <td><?php echo $producto->nombre ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <?php
                            if($producto->oferta == 1){ ?>
                                <td><del> $<?php echo number_format($producto->precio, 2) ?> </del> </td>
                                <td>$<?php echo number_format($producto->precio_oferta, 2) ?></td>
                            <?php }else{ ?>
                                <td>     </td>
                                <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <?php } ?>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($producto->imagen); ?>" alt="Imagen Producto" width="100px" align="center" /></td>
                        <td>
                            <form action="eliminar_del_carrito.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <input type="hidden" name="redireccionar_carrito">
                                <button class="button is-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="terminar_compra.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        </div>
    </div>
    <?php } ?>
    
    <?php include_once "pie.php" ?>

</body>
</html>


