<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['textarea'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado desde la WEB por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['textarea'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'clinicavetscastelldefels@gmail.com';
$asunto = 'Mensaje desde la Pagina Web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>