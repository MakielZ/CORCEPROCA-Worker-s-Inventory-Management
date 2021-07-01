<?php

    class calendarioHorarioC extends Controlador{

        public function __construct()
        {
            $this->calendarioHorarioM = $this->modelo('calendarioHorarioM');
        }

        public function index(){
        
            $asistencias = $this->calendarioHorarioM->obtenerAsistenciaCalendario();

            $datos = [

                'asistencia' =>  $asistencias

            ];

            $this->vista('paginas/calendarioHorario', $datos);
        }

         

        
    }

?>