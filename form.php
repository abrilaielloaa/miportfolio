<?php

$nombre = $_POST["nombreapellido"];
$email = $_POST["email"];
$mensajeTexto= $_POST["mensaje"];

$mensaje = "Este mensaje fue enviado por". $nombre . ",\r\n";
$mensaje .= "Su email es". $email . ",\r\n";
$mensaje .= "Mensaje:". $mensajeTexto . ",\r\n";
$mensaje .= "Enviado el". date("d/m/Y", time());

$destinatario = "abrilaiellogarcia@gmail.com";
$asunto = "Formulario de mi Portfolio";


mail($destinatario, $asunto, utf8_decode($mensaje),$header)
header("location:index.html");
exit();
?>