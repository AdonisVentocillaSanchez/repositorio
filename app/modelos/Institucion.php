<?php
    class Institucion{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function obtenerInstituciones(){
            $this->db->query('SELECT * FROM Instituciones');
            $resultados = $this->db->registros();
            return $resultados;
        }
    }
?>