<?php
    class Tabla{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerTabla()
        {
            $this->db->query('SELECT * FROM tipo_usuario');
            $resultados = $this->db->registros();
            return $resultados;
        }
    }
?>