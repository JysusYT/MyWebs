<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$destitanatario = "jesus.albe231@gmail.com";
$asunto = "Contacto desde la web";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $subject \n";
$carta .= "Mensaje: $message";

mail($destitanatario, $asunto, $carta);
header("Location:mensaje-enviado.html");

?>