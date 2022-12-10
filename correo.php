<html>

<head>
    <title>Suscribirte</title>
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            background-image: radial-gradient(#50d1d6, #003554);
            background-position: center;
            color: black;
            

        }
        h3{
            color: black;
            font-size: 30px;
            margin-bottom: 30px;
            max-width: 1250px;
            text-align: center;
        }

    </style>


</head>

<body>
    <?php
            require 'Phpmailer/Exception.php';
            require 'Phpmailer/PHPMailer.php';
            require 'Phpmailer/SMTP.php';
           
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;


                $toMail = $_POST["mail"];
                
                $asunto = "Bienvenido";
                $mensaje = "<h2>Gracias por suscribirte :), te enviamos un cupon para que lo uses en tu proxima compra</h2>";
                $namefile="Imagenes/cupon1.png";
                  
                $myMail = new PHPMailer();
                $myMail->isSMTP();
                $myMail->Host='smtp.office365.com'; 
                $myMail->SMTPAuth = true;
                $myMail->Port=587;
                $myMail->Username='al123456@edu.uaa.mx';   /* Poner tu correo institucinal y contraseña */
                $myMail->Password='contraseña';
                $myMail->SMTPSecure='tls';
                $myMail->setFrom('al123456@edu.uaa.mx','The RockGame');    /* Cambiar aqui tambien por tu correo institucional */
                $myMail->addAddress($toMail);
                $myMail->Subject = $asunto;
                $myMail->isHTML();
                $myMail->Body=$mensaje;
                $myMail->AddAttachment("images/cupon1.png");
                if($myMail->send()){
                    /* echo "<script>alert('Suscripcion realizada correctamente');</script>";  */
                     echo "<div class='justify-content-center'><h3 style='text-align: center;'>Gracias por suscribirte, te enviamos un correo electronico :)</h3></div>";
                }else{
                    $error = $myMail->ErrorInfo;
                /*    echo "<script>alert('Error en el registro de suscripcion');</script>";  */
                     echo "<div class='justify-content-center'><h3 style='text-align: center;'>Error al realizar la suscripcion</h3></div>";
                } 
                
        ?>
    <a href="index.html">
        <center>Volver a la pagina principal</center>
    </a>
</body>

</html>
