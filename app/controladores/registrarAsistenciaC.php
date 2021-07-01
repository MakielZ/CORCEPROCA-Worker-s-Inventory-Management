<?php

    class registrarAsistenciaC extends Controlador{

        public function __construct(){

            $this->registrarAsistenciaM = $this->modelo('registrarAsistenciaM');
            
        }

        public function index(){

            $obtenerEmpleados = $this->registrarAsistenciaM->obtenerEmpleados();

            $datos = [

                'obtenerE' => $obtenerEmpleados
            ];

            $this->vista('paginas/registrarAsistencias', $datos);
        }


        
    }

?>