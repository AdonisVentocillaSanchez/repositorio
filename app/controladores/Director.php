<?php
    class Director extends Controlador{
        public function __construct(){
            $this->proyectoModelo = $this->modelo('Proyecto');
            $this->tablaModelo = $this->modelo('Tabla');
        }

        public function index()
        {
            
        }
    }
?>