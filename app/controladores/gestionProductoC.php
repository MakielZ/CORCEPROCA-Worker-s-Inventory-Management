<?php

    class gestionProductoC extends Controlador{

        public function __construct()
        {
            $this->gestionProductoM = $this->modelo('gestionProductoM');
        }

        public function index(){
        

            $this->vista('paginas/gestionProducto');
        }

         

        
    }

?>