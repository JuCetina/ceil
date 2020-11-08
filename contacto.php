<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['mensaje']))
    {

        $recipient = "juliethcetina@gmail.com";
        $email_title = "Enviado desde el Formulario de Contacto de CEIL";

        $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        $apellido = filter_var(trim($_POST['apellido']), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', trim($_POST['email']));
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $tel = filter_var(trim($_POST['tel']), FILTER_VALIDATE_INT);
        $mensaje = "Nombre: $nombre $apellido \r\nEmail: $email \r\nNúmero de contacto: $tel \r\n\r\n".htmlspecialchars($_POST['mensaje']);

        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $email . "\r\n";
     
        if(mail($recipient, $email_title, $mensaje, $headers)) {
            $_SESSION['contacto_exito'] = "La información ha sido enviada correctamente, nos pondremos en contacto con usted.";
        } else {
            $_SESSION['contacto_error'] = "No fue posible enviar la información de contacto.";
        }
    }
    else
    {
        $_SESSION['contacto_error'] = "Se generó un error, algunos datos no son válidos.";
    }
}

header("Location:index.php#contacto");



