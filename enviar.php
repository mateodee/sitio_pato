<?php

// llamando a los campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo '];
$selector = $_POST['selector'];
$otro = $_POST['otro'];
$mensaje = $_POST['mensaje'];

// datos para el correo

$destinatario = "patoreichler@yahoo.com.ar";
$asunto = "Contacto de tu web";

$carta = "De: $nombre \n";
$carta .= "Email: $correo \n";
$carta .= "Como me conociste?: $selector";
$carta .= "Te conocí por: $otro \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('location:gracias.html')

?>