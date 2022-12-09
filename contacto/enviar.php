<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "therocagames1234@gmail.com";
$asunto = "Contacto desde nuestra web";
$asunto_1 = "Gracias por su comentario";

$mesj = "Se esta procesando su cometario de contactanos";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

$header = "Respuesat de contactanos";
$header_1 = "Nueva respuesta de contactanos";
// Enviando Mensaje
mail($destinatario, $asunto, $carta,$header_1);
mail($correo,$asunto_1,$mesj,$header);
header('Location:mensaje-de-envio.html');

?>