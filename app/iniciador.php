<?php
    //Cargamos las librerias
    require_once("config/configurar.php");

    require_once 'helpers/url_helper.php';

    //Autoload php para las clases
    spl_autoload_register(function($nombreClase){
        require_once 'libraries/' . $nombreClase . '.php';
    })
?>