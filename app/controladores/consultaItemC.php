<?php

    class consultaItemC extends Controlador{

        public function __construct()
        {
            $this->consultaItemM = $this->modelo('consultaItemM');
        }

        public function index(){
        

            $this->vista('paginas/consultaItem');
        }

         

        
    }

?>