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

?>

<?php

    $conexion = new mysqli("localhost", "root", "", "tienda");

    if(!$conexion){
        echo "Conexion Fallida";
        exit("Conexion no exitosa");
    }

    $idd = $_POST["id_prod"];
    $query = "SELECT * FROM productos WHERE id='$idd'";
    $sentencia = $conexion->query($query);
    $row = $sentencia->fetch_assoc();

    session_start();
    ob_start();
    $_SESSION['id_mod'] = $row['id'];
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <style>
    </style>
</head>
<body>
    <section align="center" width="500">
        <form action="actualizar_producto.php" method="POST" enctype="multipart/form-data">
            <div class="field">
                <label for="id_produ" class="label"> ID </label>
                <input type="number" class="input" placeholder="ID" style="width: 100px;" id="id" name="id" value="<?php echo $row['id'] ?>" disabled>
            </div>
            <div class="field">
                <label for="nombre" class="label">Nombre del Producto</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre" style="width: 250px ;" value="<?php echo $row['nombre'] ?>">
                </div>
            </div>
            <div class="field">
                <label for="descripcion" class="label">Descripcion del Producto</label>
                <div class="control">
                    <textarea name="descripcion" class="input-textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" value="<?php echo $row['descripcion'] ?>" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio" class="label">Precio Normal</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio" style="width: 100px;" value="<?php echo $row['precio'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="Existencia" class="label"> Existencia </label>
                <input type="number" class="input" placeholder="Existencia" style="width: 150px;" id="existencia" name="existencia" value="<?php echo $row['existencia'] ?>">
            </div>
            <div class="mb-3">
                <label for="oferta" class="form-label"> ¿El producto cuenta con Oferta? </label>
                <select required class="input-select" aria-label="Default select example" name="oferta" id="oferta" style="width: 150px; text-align:center;" >
                    <option selected>Selecciona</option>
                    <option value="0" selected>No</option>
                    <option value="1" >Si</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="precio_oferta" class="label"> Precio Especial </label>
                <input type="number" class="input" placeholder="Precio O." style="width: 100px;" id="precio_oferta" name="precio_oferta" value="<?php echo $row['precio_oferta'] ?>">
            </div>
            <div class="mb-3">
                <label for="image" class="label"> Imagen </label>
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="Imagen Producto" width="100px" align="center" />
                <input type="file" style="width: 350px;" name="foto">
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success" type="submit" value="Actualizar">Actualizar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
    </section>

    <?php include_once "pie.php" ?>

</body>
</html>