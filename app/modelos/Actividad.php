<?php
    class Actividad{
        private $db;

        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function agregarActividadxProyecto($datos){
            $this->db->query('INSERT INTO actividad (id_proyecto, item, avance, observaciones) VALUES (:id_proy,:item,:avance,:observaciones)');
            //Vinculando valores
            $this->db->bind(':id_proy', $datos['id_proy']);
            $this->db->bind(':item', $datos['item']);
            $this->db->bind(':avance', $datos['avance']);
            $this->db->bind(':observaciones', $datos['observaciones']);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function obtenerActividadxProyecto($id_proyecto)
        {
            $this->db->query('SELECT * FROM actividad WHERE id_proyecto = :id_proyecto');
            $this->db->query(':id_proyecto', $id_proyecto);
            $resultado = $this->db->registro();
            return $resultado;
        }

        

    }
?>