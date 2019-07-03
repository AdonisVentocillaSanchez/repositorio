<?php
    class Proyecto{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerProyectos(){
            $this->db->query('SELECT * FROM vw_proyecto');
            $resultados = $this->db->registros();
            return $resultados;
        }
    
        public function agregarProyecto($datos){
            $this->db->query('INSERT INTO proyecto (codigo, titulo, institucion, tipo_proy, tipo_doc, linea_gene, linea_espe, obj_gene, fecha_registro) VALUES (:codigo, :titulo, :institucion, :tipo_proy, :tipo_doc, :linea_gene, :linea_espe, :obj_gene, :fecha_registro)');

            //Vinculando valores
            $this->db->bind(':codigo', $datos['codigo']);
            $this->db->bind(':titulo', $datos['titulo']);
            $this->db->bind(':institucion', $datos['institucion']);
            $this->db->bind(':tipo_proy', $datos['tipo_proy']);
            $this->db->bind(':tipo_doc', $datos['tipo_doc']);
            $this->db->bind(':linea_gene', $datos['linea_gene']);
            $this->db->bind(':linea_espe', $datos['linea_espe']);
            $this->db->bind(':obj_gene', $datos['obj_gene']);
            $this->db->bind(':fecha_registro', $datos['fecha_registro']);
            
            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function obtenerProyectoId($codigo){
            $this->db->query('SELECT * FROM proyecto WHERE codigo = :codigo');
            $this->db->bind(':codigo', $codigo);
            $fila = $this->db->registro();
            return $fila;
        }

        public function actualizarProyecto($datos){
            $this->db->query('UPDATE proyecto SET nombre = :nombre, email = :email, telefono = :telefono WHERE id_usuario = :id');

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

        public function cancelarProyecto(){
            $this->db->query('UPDATE proyecto SET estado_proy = :estado_proy');

            //Vinculamos los valores
            $this->db->bind(':estado_proy', 5);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }
    }
?>