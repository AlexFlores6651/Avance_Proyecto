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

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Compra</title>
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
        #targeta,#deposito,#transferencia{
            display: none;
        }
    </style>
</head>
<body>


    <h2 align="center"> Formulario Compra</h2>

    <form action="ticket.php" method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <label for="nom_rec" class="label">Nombre de quien recibe: </label>
                        <div class="control">
                            <input required id="nom_rec" class="input" type="text" placeholder="Nombre (s) " name="nom_rec" style="width: 300px ;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <label for="ap" class="label">Apellido Paterno: </label>
                        <div class="control">
                            <input required id="ap" class="input" type="text" placeholder="Apellido Paterno" name="ap" style="width: 300px ;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <label for="am" class="label">Apellido Materno: </label>
                        <div class="control">
                            <input required id="am" class="input" type="text" placeholder="Apellido Materno" name="am" style="width: 300px ;">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <label for="dir" class="label">Dirección de Entrega</label>
                        <div class="control">
                            <input required id="dir" class="input" type="text" placeholder="Direccion" name="dir" style="width: 250px ;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <label for="ni" class="label">Numero Interior</label>
                        <div class="control">
                            <input  id="ni" class="input" type="number" placeholder="N. I" name="ni" style="width: 100px ;">
                        </div>
                    </div>
                </td>
                <td>  
                    <div class="field">
                        <label for="ne" class="label">Numero Exterior</label>
                        <div class="control">
                            <input required id="ne" class="input" type="number" placeholder="N. E" name="ne" style="width: 100px ;">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <label for="cop" class="label">Codigo Postal</label>
                        <div class="control">
                            <input required id="cop" class="input" type="text" placeholder="Codigo P" name="cop" style="width: 100px ;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <label for="est" class="label">Municipio</label>
                        <div class="control">
                            <input required id="mun" class="input" type="text" placeholder="Municipio" name="mun" style="width: 250px ;">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="field">
                        <label for="est" class="label">Estado</label>
                        <div class="control">
                            <input required id="est" class="input" type="text" placeholder="Estado" name="est" style="width: 250px ;">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <h3 align="center">Metodos de Pago</h3>
                </td>
            </tr>
            <tr>
                <td> <button class="btn btn-outline-primary" type="button" onclick="mostrartargeta();">Tarjeta</button> </td>
                <td> <button class="btn btn-outline-secondary" type="button" onclick="mostrardeposito();">PayPal</button> </td>
                <td> <button class="btn btn-outline-success" type="button" onclick="mostrarTransferencia();">Transferencia</button> </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div id="targeta">
                        <label for="no_tarjeta" class="label"> Numero de Tarjeta: </label>
                        <input  id="no_tarjeta" class="input" type="text" placeholder="No. Tarjeta" name="no_tarjeta" style="width: 250px ;">
                        <label for="cvv_tarjeta" class="label"> CVV de Tarjeta: </label>
                        <input  id="cvv_tarjeta" class="input" type="text" placeholder="CVV Tarjeta" name="cvv_tarjeta" style="width: 100px ;">
                        <label for="exp_tarjeta" class="label"> Fecha de Expiracion: </label>
                        <input  id="exp_tarjeta" class="input" type="text" placeholder="mm/aa" name="exp_tarjeta" style="width: 100px ;">
                    </div>
                    <div id="deposito">
                        <label for="no_paypal" class="label"> Numero Electronico: </label>
                        <input id="no_paypal" class="input disabled" type="text" placeholder="No. Paypal" name="no_paypal" style="width: 250px ;">
                        <label for="no_paypal" class="label"><span style="color:red">Lamentablemente esta función no se encuentra disponible</span></label>
                    </div>
                    <div id="transferencia">
                        <label for="transfer" class="label"> Sucursal de Transferencia </label>
                        <select class="input-select" aria-label="Default select example" name="transfer" id="transfer" style="width: 150px; text-align:center;">
                            <option selected>Selecciona</option>
                            <option value="0"> OXXO </option>
                            <option value="1"> 7Eleven </option>
                            <option value="2"> Circle K </option>
                            <option value="3"> Otro </option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="field">
                        <div class="control">
                            <button align="center" class="button is-success" type="submit" value="Guardar"> Continuar Compra </button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        

    </form>

    <script type="text/javascript">
       function mostrartargeta(){
           document.getElementById('targeta').style.display='block';
           document.getElementById('deposito').style.display='none';
           document.getElementById('transferencia').style.display='none';
       }
       function mostrardeposito(){
           document.getElementById('targeta').style.display='none';
           document.getElementById('deposito').style.display='block';
           document.getElementById('transferencia').style.display='none';
       }
       function mostrarTransferencia(){
           document.getElementById('targeta').style.display='none';
           document.getElementById('deposito').style.display='none';
           document.getElementById('transferencia').style.display='block';
       }
   </script>


<?php include_once "pie.php" ?>


</body>
</html>