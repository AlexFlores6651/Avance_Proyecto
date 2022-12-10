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

<?php
    if(!isset($_SESSION['Nombre'])){
?>
    <h3 align="center" style="color: red">Lo Lamentamos !!</h3>
    <p align="center">Para poder comprar lo que tienes en tu carrito de compra, es necesario que te <span style="color: blue;"> registres / Logies primero </span> </p>
    <p align="center"><span style="color: red">Nota:</span> sus datos de carrito de compra, no se perderan</p>
    <button align="center" class="button is-warning" value="Volver"><a href="./login/index.php"></a> Ir al Login </button>
<?php
    } else{
        header("Location: formulario_fin.php");
    }
?>

<?php
/*include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
foreach ($productos as $producto){
    restar_existencia($producto->id, $producto->existencia);
}

// Borramos el registro del carrito

limpiar_carrito();

header("Location: tienda.php");
*/
?>