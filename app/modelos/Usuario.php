<?php

    class Usuario{
        private $db;
        
        public function __construct(){
            $this->db = new ConexionBD;
        }

        public function login($datos){
            $this->db->query('SELECT nombres FROM usuario WHERE user=:user AND pass=:pass AND estado=1');
            $this->db->bind(':user', $datos['user']);
            $this->db->bind(':pass', $datos['pass']);

            //Ejecutar y verificar
            $nr = $this->db->rowCount();
            if ($nr!=0) {
                return true;
            }else {
                return false;
            }
        }

        public function obtenerUsuario(){
            $this->db->query('SELECT * FROM usuario');
            $resultados = $this->db->registros();
            return $resultados;
        }
    
        public function agregarUsuario($datos){
            $this->db->query('INSERT INTO usuario (dni, nombres, apellidos, telefono, correo, fecha_nac, user, pass, tipo_usu, fecha_creacion) VALUES (:dni, :nombres, :apellidos, :telefono, :correo, :fecha_nac, :user, :pass, :tipo_usu, :fecha_creacion)');
            
            //Vinculando valores
            $this->db->bind(':dni', $datos['dni']);
            $this->db->bind(':nombres', $datos['nombres']);
            $this->db->bind(':apellidos', $datos['apellidos']);
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':correo', $datos['correo']);
            $this->db->bind(':fecha_nac', $datos['fecha_nac']);
            $this->db->bind(':user', $datos['user']);
            $this->db->bind(':pass', $datos['pass']);
            $this->db->bind(':tipo_usu', $datos['tipo_usu']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
                        
            //Ejecutar y retornar
            if ($this->db->execute()) {
                
                return true;
            }else {
                return false;
            }
        }
 
        public function obtenerUsuarioId($dni){
            $this->db->query('SELECT * FROM usuario WHERE dni = :dni');
            $this->db->bind(':dni', $dni);
            $fila = $this->db->registro();
            return $fila;
        }

        public function actualizarUsuario($datos){
            $this->db->query('UPDATE usuario SET telefono = :telefono, correo = :correo, pass = :pass WHERE dni = :dni');

            //Vinculamos los valores
            $this->db->bind(':telefono', $datos['telefono']);
            $this->db->bind(':correo', $datos['correo']);
            $this->db->bind(':pass', $datos['pass']);
            $this->db->bind(':dni', $datos['dni']);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }

        public function estadoUsuario($datos){
            $this->db->query('UPDATE usuario SET estado = :estado WHERE dni = :dni');

            //Vinculamos los valores
            $this->db->bind(':estado', $datos['estado']);
            $this->db->bind(':dni', $datos['dni']);

            //Ejecutar y retornar
            if ($this->db->execute()) {
                return true;
            }else {
                return false;
            }
        }
    }
?>