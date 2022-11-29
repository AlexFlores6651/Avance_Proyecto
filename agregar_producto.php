<?php include_once "encabezado.php" ?>

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
        <fieldset>
            <legend>Agregado de Datos</legend>
        <form action="guardar_producto.php" method="POST" enctype="multipart/form-data">
            <div class="field">
                <label for="nombre" class="label">Nombre del Producto</label>
                <div class="control">
                    <input required id="nombre" class="input" type="text" placeholder="Nombre" name="nombre" style="width: 250px ;">
                </div>
            </div>
            <div class="field">
                <label for="descripcion" class="label">Descripcion del Producto</label>
                <div class="control">
                    <textarea name="descripcion" class="input-textarea" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio" class="label">Precio Normal</label>
                <div class="control">
                    <input required id="precio" name="precio" class="input" type="number" placeholder="Precio" style="width: 100px;">
                </div>
            </div>
            <div class="mb-3">
                <label for="Existencia" class="label"> Existencia </label>
                <input type="number" class="input" placeholder="Existencia" style="width: 150px;" id="existencia" name="existencia">
            </div>
            <div class="mb-3">
                <label for="oferta" class="form-label"> ¿El producto cuenta con Oferta? </label>
                <select required class="input-select" aria-label="Default select example" name="oferta" id="oferta" style="width: 150px; text-align:center;">
                    <option selected>Selecciona</option>
                    <option value="0" selected>No</option>
                    <option value="1" >Si</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="precio_oferta" class="label"> Precio Especial </label>
                <input type="number" class="input" placeholder="Precio O." style="width: 100px;" id="precio_oferta" name="precio_oferta" value="0">
            </div>
            <div class="mb-3">
                <label for="image" class="label"> Imagen </label>
                <input type="file" style="width: 350px;" name="image">
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-success" type="submit" value="Guardar">Guardar</button>
                    <a href="productos.php" class="button is-warning">Volver</a>
                </div>
            </div>
        </form>
        </fieldset>
    </section>
</body>
</html>