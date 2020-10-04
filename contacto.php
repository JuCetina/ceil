<?php

    $error = 'no';
    $recipient = "juliethcetina@gmail.com";
    $email_title = "Enviado desde el Formulario de Contacto";
    $nombre = '';
    $apellido = '';
    $email = '';
    $tel = '';
    $mensaje = '';

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['mensaje']))
    {
        //var_dump($_POST);

        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
        $mensaje = htmlspecialchars($_POST['mensaje'])." Mi número de contacto es ".$tel;

        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $email . "\r\n";
     
        if(mail($recipient, $email_title, $mensaje, $headers)) {
            echo 'Se envió email';
            //header("Location:index.php?error=$error#contacto");
        } else {
            $error = 'sipi';
            echo 'No se envió email';
            //header("Location:index.php?error=$error#contacto");
        }
    }
    else
    {
        $error = 'si';
        //header("Location:index.php?error=$error#contacto");
    }

