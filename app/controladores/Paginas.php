<?php
    class Paginas extends Controlador{
        public function __construct(){
            $this->usuarioModelo = $this->modelo('Proyecto');
        }

        public function index(){

            // obtener los proyectos
            $proyectos = $this->usuarioModelo->obtenerProyectos();

            $datos = [
                'proyectos' => $proyectos
            ];

            $this->vista('paginas/inicio', $datos);
        }
 
        public function agregar(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'nombre' => trim($_POST['nombre']),
                    'email' => trim($_POST['email']),
                    'telefono' => trim($_POST['telefono'])
                ];

                if ($this->usuarioModelo->agregarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{
                $datos = [
                    'nombre' => '',
                    'email' => '',
                    'telefono' => ''
                ];

                $this->vista('paginas/agregar', $datos);
            }

        }

        public function editar($id){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'id_usuario' => $id,
                    'nombre' => trim($_POST['nombre']),
                    'email' => trim($_POST['email']),
                    'telefono' => trim($_POST['telefono'])
                ];

                if ($this->usuarioModelo->actualizarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{

                //Obtener informacion de usuario desde el modelo
                $usuario = $this->usuarioModelo->obtenerProyectoId($id);

                $datos = [
                    'id_usuario' => $usuario->id_usuario,
                    'nombre' => $usuario->nombre,
                    'email' => $usuario->email,
                    'telefono' => $usuario->telefono
                ];

                $this->vista('paginas/editar', $datos);
            }

        }

        public function borrar($id){

            //Obtener informacion de usuario desde el modelo
            $usuario = $this->usuarioModelo->obtenerProyectoId($id);

            $datos = [
                'id_usuario' => $usuario->id_usuario,
                'nombre' => $usuario->nombre,
                'email' => $usuario->email,
                'telefono' => $usuario->telefono
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'id_usuario' => $id
                ];

                if ($this->usuarioModelo->borrarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }
            $this->vista('paginas/borrar', $datos);
        }

    }
?>