<?php
    class Principal extends Controlador{
        public function __construct(){
            $this->usuarioModelo = $this->modelo('Usuario');
        }

        public function index(){
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'user' => trim($_POST['user']),
                    'pass' => trim($_POST['pass'])
                ];
                if ($this->usuarioModelo->login($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{
                $this->vista('principal/index');
            }
        }
    }
?>