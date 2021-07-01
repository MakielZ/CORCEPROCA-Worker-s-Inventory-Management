<?php

    class usuarioC extends Controlador{

        public function __construct()
        {
            $this->usuarioM = $this->modelo('usuarioM');
        }

        public function index(){
        

            $this->vista('paginas/usuario');
        }

         

        
    }

?>