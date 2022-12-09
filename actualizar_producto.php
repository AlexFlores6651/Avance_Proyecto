//<?php
    
    session_start();
    ob_start();
    $idd = $_SESSION['id_mod'];

    $Imagen = file_get_contents($_FILES['foto']['tmp_name']);
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
        actualizarProducto($idd, $_POST["nombre"], $_POST["precio"], $_POST["descripcion"], $_POST["existencia"], $_POST["oferta"], $_POST["precio_oferta"]);
        $file1 = $_FILES["foto"]["tmp_name"];
        $size1 = $_FILES["foto"]["size"];
        $type1 = $_FILES["foto"]["type"];
        $name1 = $_FILES["foto"]["name"];
        $fp1 = fopen($file1, "rb");
        $contenido1 = fread($fp1, $size1);
        $contenido1 = addslashes($contenido1);
        fclose($fp1);
        $conexion = new mysqli("localhost", "root", "", "tienda");
        $query = "UPDATE productos set imagen='$contenido1' WHERE id=$idd";
        //$sentencia = $bd->query("UPDATE productos SET imagen='$imagen' WHERE id='$id'");
       // $sentencia = mysql_query($query) or die("Error in query Update Uder.".mysql_error());
        $sentencia = $conexion->query($query);
        header("Location: productos.php");
    }else{
        echo "No ha subido una imagen";
    }

?>