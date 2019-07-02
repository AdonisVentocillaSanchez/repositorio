<?php
    class Institucion{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerInstitucion(){
            $this->db->query('SELECT * FROM institucion');
            $resultados = $this->db->registros();
            return $resultados;
        }

        
    }
?>