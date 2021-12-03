<?php
$name = $_POST['Nombre y apellido'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Asunto'];
$message = $_POST['Mensaje'];

$email_from = 'info@yourwebsite.com'
$emai_subject = 'Consulta'

$email_body = "Nombre: $name.\n".
              "Email:  $visitor_email.\n".
              "Asunto: $subject.\n".
              "Mensaje: $message.\n".

$to = 'arielbartoli@gmail.com';

$headers = "De: $email_from \r\n";

$headers .= "Responder a: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contacto.html")



?>