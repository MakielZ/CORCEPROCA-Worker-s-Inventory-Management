<?php

    class consultaProductoC extends Controlador{

        public function __construct()
        {
            $this->consultaProductoM = $this->modelo('consultaProductoM');
        }

        public function index(){
        

            $this->vista('paginas/consultaProducto');
        }

         

        
    }

?>