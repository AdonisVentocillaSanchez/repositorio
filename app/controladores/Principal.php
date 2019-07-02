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
                $qw = $this->usuarioModelo->login($datos);
                if ($qw) { 
                    redireccionar('/paginas');
                }else {
                    redireccionar('/?f=t');
                }
            }else{
                $this->vista('principal/login');
            }
        }

        public function register()
        {
            //Obtener tabla de tipo de usuario
            $tipo = $this->tablaModelo->obtenerTabla();
            $datos = [
                'tipo_usuario' => $tipo
            ];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'dni' => trim($_POST['dni']),
                    'nombres' => trim($_POST['nombres']),
                    'apellidos' => trim($_POST['apellidos']),
                    'correo' => trim($_POST['correo']),
                    'telefono' => trim($_POST['telefono']),
                    'fecha_nac' => date('Y-m-d', strtotime($_POST['fecha_nac'])),
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
                
                $this->vista('principal/register',$datos);
            }
            
        }
    }
?>