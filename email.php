<?php
$to      = 'geral.cemeor@gmail.com';
$subject = 'Formulário Site Cemeor';
$message = $_POST['Texto'];
$headers = 'From: '.$_POST['email'] . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
session_destroy();
header("Location: /Contactos.html");
    exit;
?> 