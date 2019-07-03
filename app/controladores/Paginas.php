<?php
    class Paginas extends Controlador{
        public function __construct(){
            $this->proyectoModelo = $this->modelo('Proyecto');
            $this->tablaModelo = $this->modelo('Tabla');
        }

        public function index(){

            // obtener los proyectos
            $proyectos = $this->proyectoModelo->obtenerProyectos();

            $datos = [
                'proyectos' => $proyectos
            ];

            $this->vista('paginas/inicio', $datos);
        }
 
        public function agregar(){

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = [
                    'codigo' => trim($_POST['codigo']),
                    'titulo' => trim($_POST['titulo']), 
                    'institucion' => trim($_POST['institucion']), 
                    'tipo_proy' => trim($_POST['tipo_proy']), 
                    'tipo_doc' => trim($_POST['tipo_doc']), 
                    'linea_gene' => trim($_POST['linea_gene']), 
                    'linea_espe' => trim($_POST['linea_espe']), 
                    'obj_gene' => trim($_POST['obj_gene']), 
                    'fecha_registro' => date("Y-m-d")
                ];

                if ($this->proyectoModelo->agregarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{
                $insti = $this->tablaModelo->obtenerTabla("institucion");
                $proy = $this->tablaModelo->obtenerTabla("tipo_proyecto");
                $doc = $this->tablaModelo->obtenerTabla("tipo_documento");
                $l_gene = $this->tablaModelo->obtenerTabla("linea_general");
                $l_espe = $this->tablaModelo->obtenerTabla("linea_especifica");             
                $datos = [
                    'institucion' => $insti,
                    'tipo_proyecto' => $proy,
                    'tipo_documento' => $doc,
                    'linea_general' => $l_gene,
                    'linea_especifica' => $l_espe
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

                if ($this->proyectoModelo->actualizarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }else{

                //Obtener informacion de usuario desde el modelo
                $usuario = $this->proyectoModelo->obtenerProyectoId($id);

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
            $usuario = $this->proyectoModelo->obtenerProyectoId($id);

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

                if ($this->proyectoModelo->borrarProyecto($datos)) {
                    redireccionar('/paginas');
                }else {
                    die('Algo salio mal');
                }
            }
            $this->vista('paginas/borrar', $datos);
        }

    }
?>