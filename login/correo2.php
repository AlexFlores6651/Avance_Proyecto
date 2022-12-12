<?php
    $admin = 'therocagames1234@gmail.com';
    $destino =  $_POST['email'];

    $asunto='Suscripcion actual';
    
    $header= "Te suscribiste";
    $mesj = 'Cupon: 14238 Hola Gracias por suscribirte';
    
    mail($destino,$asunto,$mesj,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='../tienda.php'\",1000)</script>";


?>