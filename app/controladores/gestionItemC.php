<?php

    class gestionItemC extends Controlador{

        public function __construct()
        {
            $this->gestionItemM = $this->modelo('gestionItemM');
        }

        public function index(){
        

            $this->vista('paginas/gestionItem');
        }

         

        
    }

?>