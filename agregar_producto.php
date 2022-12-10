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
    <title>Agregar Producto</title>
    <style>
        table{
            align-self: center;
        }
        tr, td{
            text-align: center;
            width: 300px;
            padding: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>


    <h2 align="center"> Agregado de Datos</h2>

    <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <label for="nombre" class="label">Nombre del Producto</label>
                        <div class="control">
                            <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre" style="width: 250px ;">
                        </div>
                    </div>
                </td>
                <td colspan="2">
                    <div class="field">
                        <label for="descripcion" class="label">Descripcion del Producto</label>
                        <div class="control">
                            <textarea name="descripcion" class="input-textarea" id="descripcion" cols="50" rows="5" placeholder="Descripción" required></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <label for="precio" class="label">Precio Normal</label>
                        <div class="control">
                            <input required id="precio" name="precio" class="input" type="number" placeholder="Precio" style="width: 100px;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <label for="Existencia" class="label"> Existencia </label>
                        <input type="number" class="input" placeholder="Existencia" style="width: 150px;" id="existencia" name="existencia">
                    </div>
                </td>
                <td>  
                    <div class="mb-3">
                    <label for="categoria" class="label"> Categoria </label>
                    <select required class="input-select" aria-label="Default select example" name="categoria" id="categoria" style="width: 150px; text-align:center;">
                        <option selected>Selecciona</option>
                        <option value="0"> Anime </option>
                        <option value="1"> Videojuegos </option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="oferta" class="label"> ¿El producto cuenta con Oferta? </label>
                    <select required class="input-select" aria-label="Default select example" name="oferta" id="oferta" style="width: 150px; text-align:center;">
                        <option selected>Selecciona</option>
                        <option value="0" >No</option>
                        <option value="1" >Si</option>
                    </select>
                </td>
                <td>
                    <label for="precio_oferta" class="label"> Precio Especial </label>
                    <input type="number" class="input" placeholder="Precio O." style="width: 100px;" id="precio_oferta" name="precio_oferta" value="0">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="image" class="label"> Imagen </label>
                    <input type="file" style="width: 350px;" name="image">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="field">
                        <div class="control">
                            <button class="button is-success" type="submit" value="Guardar"> Guardar </button>
                            <button class="button is-warning" value="Volver"><a href="productos.php"></a> Volver </button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>