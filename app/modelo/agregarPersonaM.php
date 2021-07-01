<?php
    class agregarPersonaM{

        private $db;

        public function __construct(){

            $this->db = new Base;
            
        }
        
        public function agregarProducto($datos){

            $this->db->query ( 'INSERT 
                                INTO 
                                persona(
                                cedula,
                                nombre, 
                                apellido, 
                                foto) 
                                VALUES(
                                :cedula, 
                                :nombre, 
                                :apellido, 
                                :foto)');

            $this->db->bind(':cedula', $datos['nCedula'], PDO::PARAM_INT, 11);
            $this->db->bind(':nombre', $datos['nPersona'], PDO::PARAM_STR);
            $this->db->bind(':apellido', $datos['aPersona'], PDO::PARAM_STR);
            $this->db->bind(':foto', $datos['fotoPersona'], PDO::PARAM_STR);
            
            if($this->db->execute()){
                return true;
            
            }else{
                return false;
            }

        }
        

    }

?>