<?php

include 'app.php';

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado() : bool {
    session_start();

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
    
    if($_SESSION['login']) {
        return true;
    } 

    return false;
}