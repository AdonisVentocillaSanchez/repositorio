<?php
    class Tabla{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerTabla($tabla)
        {
            $this->db->query('SELECT * FROM :tabla');
            $this->db->bind(':tabla', $tabla);
            $resultados = $this->db->registros();
            return $resultados;
        }
    }
?>