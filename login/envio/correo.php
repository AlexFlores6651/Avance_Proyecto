<?php
    $admin = 'therocagames1234@gmail.com';
    $destino =  $_POST['email'];

    $asunto='Cuenta Bloqueada';
    
    $header= "Bloqueo de cuanta";
    $mesj = 'lo sentimoos llego al limte de intentos permitidos por lo que se ha bloqueado su contraseña';
    
    mail($destino,$asunto,$mesj,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";


?>