<?php

function borrarAlertas(){
    if(isset($_SESSION['contacto_exito'])){
        $_SESSION['contacto_exito'] = null;
        unset($_SESSION['contacto_exito']);
    }

    if(isset($_SESSION['contacto_error'])){
        $_SESSION['contacto_error'] = null;
        unset($_SESSION['contacto_error']);
    }
}