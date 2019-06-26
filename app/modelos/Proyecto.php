<?php
    class Proyecto{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerProyectos(){
            $this->db->query('SELECT * FROM proyectos');
            $resultados = $this->db->registros();
            return $resultados;
        }
    
        public function agregarProyecto($datos){
            $this->db->query('INSERT INTO proyectos (nombre,email,telefono) VALUES (:nombre, :email, :telefono)');

            //Vinculando valores
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':email', $datos['email']);
            $this->db->bind(':telefono', $datos['telefono']);
            
            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function obtenerProyectoId($id){
            $this->db->query('SELECT * FROM proyectos WHERE id = :id');
            $this->db->bind(':id', $id);
            $fila = $this->db->registro();
            return $fila;
        }

        public function actualizarProyecto($datos){
            $this->db->query('UPDATE proyectos SET nombre = :nombre, email = :email, telefono = :telefono WHERE id_usuario = :id');

            //Vinculamos los valores
            $this->db->bind(':id', $datos['id_usuario']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':email', $datos['email']);
            $this->db->bind(':telefono', $datos['telefono']);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function borrarProyecto($datos){
            $this->db->query('DELETE FROM proyectos WHERE id = :id');

            //Vinculamos los valores
            $this->db->bind(':id', $datos['id_usuario']);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }
    }
?>