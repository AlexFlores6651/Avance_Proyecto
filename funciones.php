<?php

function obtenerProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT *
     FROM productos
     INNER JOIN carrito_usuarios
     ON productos.id = carrito_usuarios.id_producto
     WHERE carrito_usuarios.id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll();
}
function quitarProductoDelCarrito($idProducto)
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("DELETE FROM carrito_usuarios WHERE id_sesion = ? AND id_producto = ?");
    return $sentencia->execute([$idSesion, $idProducto]);
}

function obtenerProductos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos");
    return $sentencia->fetchAll();
}

function obtenerProductosAnime()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE categoria=0");
    return $sentencia->fetchAll();
}

function obtenerProductosJuegos()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE categoria=1");
    return $sentencia->fetchAll();
}

function obtenerProductosF1()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE precio >= 1 AND precio <= 100");
    return $sentencia->fetchAll();
}

function obtenerProductosF2()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE precio >= 100 AND precio <= 500");
    return $sentencia->fetchAll();
}

function obtenerProductosF3()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE precio >= 500 AND precio <= 1000");
    return $sentencia->fetchAll();
}

function obtenerProductosF4()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM productos WHERE precio >= 1000");
    return $sentencia->fetchAll();
}


function restar_existencia($id_producto, $exist)
{
    $num = $exist-1;
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->query("UPDATE productos SET existencia = '$num' WHERE id = '$id_producto'");
    //return $sentencia->execute($exist, $id_producto);
}

function limpiar_carrito(){
    $idSesion = session_id();
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->query("DELETE FROM carrito_usuarios WHERE id_sesion = '$idSesion'");
    //return $sentencia->execute($idSesion);
}

function productoYaEstaEnCarrito($idProducto)
{
    $ids = obtenerIdsDeProductosEnCarrito();
    foreach ($ids as $id) {
        if ($id == $idProducto) return true;
    }
    return false;
}

function obtenerIdsDeProductosEnCarrito()
{
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $sentencia = $bd->prepare("SELECT id_producto FROM carrito_usuarios WHERE id_sesion = ?");
    $idSesion = session_id();
    $sentencia->execute([$idSesion]);
    return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}

function agregarProductoAlCarrito($idProducto)
{
    // Ligar el id del producto con el usuario a través de la sesión
    $bd = obtenerConexion();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sentencia = $bd->prepare("INSERT INTO carrito_usuarios(id_sesion, id_producto) VALUES (?, ?)");
    return $sentencia->execute([$idSesion, $idProducto]);
}


function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        //session_start();
    }
}

function eliminarProducto($id)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("DELETE FROM productos WHERE id = ?");
    return $sentencia->execute([$id]);
}

function guardarProducto($nombre, $precio, $descripcion, $existencia, $oferta, $preciooferta, $imagen, $categoria)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("INSERT INTO productos(nombre, precio, descripcion, oferta, precio_oferta, imagen, existencia, categoria) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    return $sentencia->execute([$nombre, $precio, $descripcion, $oferta, $preciooferta, $imagen, $existencia, $categoria]);
}

function actualizarProducto($id, $nombre, $precio, $descripcion, $existencia, $oferta, $preciooferta){
    //$bd = obtenerConexion();
    $bd = new mysqli("localhost", "root", "", "tienda");
    $sentencia = $bd->query("UPDATE productos SET nombre='$nombre' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET precio='$precio' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET descripcion='$descripcion' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET existencia='$existencia' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET oferta='$oferta' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET precio_oferta='$preciooferta' WHERE id='$id'");
    $sentencia = $bd->query("UPDATE productos SET imagen='1' WHERE id='$id'");
    //$sentencia = $bd->query("UPDATE productos SET imagen='$imagen' WHERE id='$id'");

    //$sentencia = $bd->prepare("UPDATE productos(nombre, precio, descripcion, oferta, precio_oferta, imagen, existencia) VALUES(?, ?, ?, ?, ?, ?, ?) WHERE id='$Id'");
    //$sentencia->execute([$nombre, $precio, $descripcion, $oferta, $preciooferta, $imagen, $existencia]);
    //$sentencia = $bd->query("UPDATE productos SET nombre='$nombre', precio='$precio', descripcion='$descripcion', existencia='$existencia', oferta='$oferta', precio_oferta='$preciooferta', imagen='$imagen' WHERE id='$Id'");
    return $sentencia;
}

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}
function obtenerConexion()
{
    $password = obtenerVariableDelEntorno("MYSQL_PASSWORD");
    $user = obtenerVariableDelEntorno("MYSQL_USER");
    $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
