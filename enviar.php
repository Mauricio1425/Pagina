<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'clinicadentalsmil@gmail.com'; 
    $subject = $_POST['subjet'];
    $name = $_POST['name'];
    $from = $_POST['mail'];
    $message = $_POST['message'];

    $headers = "From: $name <$from>" . "\r\n";
    $headers .= "Reply-To: $from" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "El correo se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
