<?php

    class registrarAsistenciaM{

        private $db;

        public function __construct(){

            $this->db = new Base;
            
        }

        public function obtenerEmpleados(){

            $this->db->query('SELECT * FROM empleado');
            $resultados = $this->db->registros();

            return $resultados;
        }

        


        
        
        

    }
?>