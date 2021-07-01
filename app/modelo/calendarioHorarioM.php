<?php

    class calendarioHorarioM{

        private $db;

        public function __construct(){
            $this->db = new Base;
            
        }

        public function obtenerAsistenciaCalendario(){
            $this->db->query("SELECT idAsistencia, horaEntrada, horaSalida FROM asistencia");
            $resultados = $this->db->registros();

            return $resultados;
        }
    }

?>