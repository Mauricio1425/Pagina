<?php
if (isset($_POST['Enviar'])){
    if (strlen($_POST['name']) > 1 &&
    strlen($_POST['email']) > 1 &&
    strlen($_POST['subjet']) > 1 &&
    strlen($_POST['message']) > 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subjet = trim($_POST['subjet']);
        $message = trim($_POST['message']);
        
    }
}
?>

