<?php
    include_once "funciones.php";
    $productos = obtenerProductosEnCarrito();
    foreach ($productos as $producto){
        restar_existencia($producto->id, $producto->existencia);
    }

    // Borramos el registro del carrito

    limpiar_carrito();

    header("Location: index.php");
?>