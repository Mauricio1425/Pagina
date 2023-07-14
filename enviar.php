<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'mauricio.tavitas25@gmail.com';
    $from = 'mauricio.tavitas25@gmail.com';
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subjet'];
    $message = $_POST['message'];

    // Validar campos requeridos
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo 'Por favor completa todos los campos.';
        exit;
    }

    // Validar dirección de correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Por favor introduce una dirección de correo electrónico válida.';
        exit;
    }

    // Construir el mensaje
    $email_message = "Nombre: $name\n";
    $email_message .= "Correo Electrónico: $email\n";
    $email_message .= "Asunto: $subject\n";
    $email_message .= "Mensaje:\n$message\n";

    // Configurar cabeceras del correo
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($to, $subject, $email_message, $headers)) {
        echo 'Tu mensaje ha sido enviado exitosamente.';
    } else {
        echo 'Ha ocurrido un error al enviar el mensaje. Por favor, intenta nuevamente.';
    }
}
?>

