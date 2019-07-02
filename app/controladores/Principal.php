<?php
    class Principal extends Controlador{
        public function __construct(){
            $this->usuarioModelo = $this->modelo('Usuario');
            $this->tablaModelo = $this->modelo('Tabla');
        }

        public function index(){
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'user' => trim($_POST['user']),
                    'pass' => md5(trim($_POST['pass']))
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

        public function register()
        {
            //Obtener tabla de tipo de usuario
            // $tipo = $this->tablaModelo->obtenerTabla('tipo_usuario');
            // $data = [
            //     'tipo_usuario' => $tipo
            // ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'dni' => trim($_POST['dni']),
                    'nombres' => trim($_POST['nombres']),
                    'apellidos' => trim($_POST['apellidos']),
                    'correo' => trim($_POST['correo']),
                    'telefono' => trim($_POST['telefono']),
                    'fecha_nac' => trim($_POST['fecha_nac']),
                    'user' => trim($_POST['user']),
                    'pass' => md5(trim($_POST['pass'])),
                    'tipo_usu' => trim($_POST['tipo_usu']),
                    'fecha_creacion' => date("Y-m-d")
                ];
                if ($this->usuarioModelo->agregarUsuario($datos)) {
                    redireccionar('/principal/index');
                }else {
                    die('Algo salio mal');
                }
            }else{
                $this->vista('principal/register');
            }
            
        }
    }
?>