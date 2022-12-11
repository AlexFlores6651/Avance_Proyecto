<?php
    $admin = 'therocagames1234@gmail.com';
    $destino =  $_POST['email'];

    $asunto='Suscripcion actual';
    
    $header= "Te suscrubiste";
    $mesj = 'Cupon: 123Hola Gracias por suscirbirte';
    
    mail($destino,$asunto,$mesj,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='../tienda.php'\",1000)</script>";


?>