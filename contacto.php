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
        echo '<h2>'.$_POST['nombre'].'</h2>';
        echo '<h2>'.$_POST['apellido'].'</h2>';
        echo '<h2>'.$_POST['email'].'</h2>';
        echo '<h2>'.$_POST['tel'].'</h2>';
        echo '<h2>'.$_POST['mensaje'].'</h2>';

        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $mensaje = htmlspecialchars($_POST['mensaje']);

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

