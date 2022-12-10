<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();

ob_start();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <title>Ticket de Compra</title>

    <style>
        tr, td{
            padding-left: 50px;
            padding-right: 50px;
        }

        .lol{
            font-family: 'Rajdhani', sans-serif;
        }
    </style>
</head>
<body>
    <fieldset>
        <table align="center">
            <tr>
                <td colspan="3"><h3 align="center">Ticket de Compra</h3></td>
            </tr>
            <tr>
                <td colspan="3"><h3 align="center">The RockGames</h3></td>
            </tr>
            <tr>
                <td colspan="3" ><p style="font-size: 15;" align="justify">El producto se entregara a: </p></td>
            </tr>
            <tr>
                <td colspan="3" ><p style="font-size: 14;" align="justify"> <?php echo $_POST['nom_rec'].' '.$_POST['ap'].' '.$_POST['am']; ?> </p></td>
            </tr>
            <tr>
                <td colspan="3"><h3 style="font-size: 16;" class="lol" align="left">Datos de Entrega</h3></td>
            </tr>
            <tr>
                <td colspan="3" ><p style="font-size: 15;" align="justify">El producto se entregara en la direccion con los siguientes datos: </p></td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 5px"><p style="font-size: 12;" class="lol"> <?php echo 'Dirección: '.$_POST['dir'].' No. Int: '.$_POST['ni'].' No. Ext: '.$_POST['ne']; ?> </p></td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 5px"><p style="font-size: 12;" class="lol"> <?php echo $_POST['cop'].' '.$_POST['mun'].' '.$_POST['est']; ?> </p></td>
            </tr>
            <tr>
                <td colspan="3"><h3 style="font-size: 16;" class="lol" align="left">Metodo de Pago</h3></td>
            </tr>
            <tr>
                <td colspan="3" ><p style="font-size: 14;" align="justify"> <?php 
                    if(!empty($_POST['no_tarjeta'])){
                            echo ' Pago por Tarjeta: '.$_POST['no_tarjeta'];
                    }else{
                        if(empty($_POST['transfer'])){
                            if($_POST['transfer'] == 0){
                                echo 'Pago por transferencia OXXO';
                            }
                            if($_POST['transfer'] == 1){
                                echo 'Pago por Transferencia 7Eleven';
                            }
                            if($_POST['transfer'] == 2){
                                echo 'Pago por Transferencia Circle K';
                            }
                            if($_POST['transfer'] == 3){
                                echo 'Pago por Transferencia Otros';
                            }
                        }
                    }
                ?></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: -5px;"><blockquote><h3 style="letter-spacing: 5px; word-spacing: 5px;" class="lol">Lista de Productos:</h3></td>
            </tr>
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
                <td colspan="2"><p class="lol"><?php echo $producto->nombre; ?></p></td>
                <td><p class="lol"> <?php if($producto->oferta == 1){
                    echo number_format($producto->precio_oferta, 2);
                }else{
                    echo number_format($producto->precio, 2);
                }
                ?> </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="2" style="padding-top: -5px;"><blockquote><h3 style="letter-spacing: 5px; word-spacing: 5px;" class="lol"> TOTAL </h3></td>
                <td style="padding-top: -5px;"><blockquote><h3 style="letter-spacing: 5px; word-spacing: 5px;" class="lol"><?php echo $total; ?></h3></td>
            </tr>
        </table>
    </fieldset>
    <a href="./librerias/vendor/autoload.php"></a>
</body>
</html>

<?php
    $html=ob_get_clean();
    //echo $html;

    
    //include_once "vendor/autoload.php";
    include_once "./librerias/vendor/autoload.php";
    use Dompdf\Dompdf;
    //require_once '../ActividadesPHP/PDF_PHP_MAFR_221022/Librerias/autoload.inc.php';
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled'=> true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);
    //$dompdf->loadHtml("Hola Mundo");

    $dompdf->setPaper('A4');

    $dompdf->render();

    $dompdf->stream("CertificadoPHP.pdf", array("Attachment"=> false));

?>