<?php

// llamando a los campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo '];
$selector = $_POST['selector'];
$otro = $_POST['otro'];
$mensaje = $_POST['mensaje'];

// datos para el correo

$destinatario = "patoreichler@yahoo.com.ar";
$asunto = "Contact in English from website";

$carta = "From: $nombre \n";
$carta .= "Email: $correo \n";
$carta .= "How did you find me?: $selector";
$carta .= "I found you in: $otro \n";
$carta .= "Message: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('location:thanks.html')

?>