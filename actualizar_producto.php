<?php
    
    session_start();
    ob_start();
    $idd = $_SESSION['id_mod'];

    $Imagen = file_get_contents($_FILES['image']['tmp_name']);
    if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["descripcion"] ) || !isset($_POST["existencia"] ) || !isset($Imagen)) {
        if(!isset($_POST["nombre"])) exit("Falta Nombre");
        if(!isset($_POST["precio"])) exit("Falta Precio");
        if(!isset($_POST["descripcion"])) exit("Falta Descripcion");
        if(!isset($_POST["existencia"])) exit("Falta Existencia");
        if(!isset($Imagen)) exit("Falta Imagen");
    }

    if(!isset($idd)){
        exit("Falta el ID");
    }

    include_once "funciones.php";

    if(isset($Imagen)){
        actualizarProducto($idd, $_POST["nombre"], $_POST["precio"], $_POST["descripcion"], $_POST["existencia"], $_POST["oferta"], $_POST["precio_oferta"], $Imagen);
        header("Location: productos.php");
    }else{
        echo "No ha subido una imagen";
    }

?>