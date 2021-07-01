<?php

    class asistenciasC extends Controlador{

        public function __construct()
        {
            $this->asistenciasM = $this->modelo('asistenciasM');
        }

        public function index(){
        

            $this->vista('paginas/asistencias');
        }

         

        
    }

?>