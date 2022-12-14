<?php
    session_start();
    ob_start();

    $nombreA = 'Admin';
    $nombreT = 'Administrador';

    if(!isset($_SESSION['Nombre'])){
        include "../encabezado4.php";
    }else{
        if($_SESSION['Nombre'] == $nombreA && $_SESSION['Tipo'] == $nombreT){
            include "../encabezado6.php";
        }else{
            include "../encabezado5.php";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas frecuentes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="container-faq">
                <div class="title-faq">
                    <h3>Preguntas Frecuentes</h3>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Qué es The RockGames? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Somos una tienda online que vende todo lo relacionado a los videojuegos, mangas  y objetos de anime.<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Hacen envíos internacionales? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>No, solamente hacemos envíos dentro de México<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Manejan tarjeta? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Claro, los métodos de pago con los que contamos son tarjeta de crédito, Paypal y transferencia.<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Cuál es su política de devolución? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>A menos que se indique lo contrario en esta Política, los productos enviados por the RockGames, incluidos los productos de Remates de almacén, pueden devolverse dentro de los 30 días posteriores a la fecha de entrega en la mayoría de los casos. Los productos se deberán devolver en el mismo estado en el que se recibieron. Por lo tanto, los productos nuevos se deben devolver nuevos y completos. Algunos productos tienen diferentes políticas o requisitos. Cuando devuelves un producto, aceptas el reembolso y la forma en que este se emite pueden variar de acuerdo con el estado del producto, el tiempo que lo tuviste y la forma en que se compró. Si devuelves un producto diferente o uno que esté en un estado diferente a como lo enviamos, no podremos procesar tu reembolso.<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Tiene servicio de atención al cliente?<span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Así es, the RockGames dispone de servicio de atención al cliente en su página web, habiendo un apartado de "contáctanos" para que el usuario pueda escribirnos al correo ya sea para decirnos alguna sugerencia, duda o recomendaciones.<span>R</span></p>
                    </div>
                </div>

                <div class="item-faq">
                    <div class="question">
                        <h3>¿Se envía factura al comprar cada producto? <span>P</span></h3>
                        <div class="more"><i>+</i></div>
                    </div>
                    <div class="answer">
                        <p>Si, en cuanto se termine de comprar se entrega la nota del comprador, donde se puede observar el costo de cada producto, los gastos de envío, impuestos y su total.<span>R</span></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../javascript/scripts.js"></script>
</body>
</html>