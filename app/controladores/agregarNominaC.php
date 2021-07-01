<?php

    class agregarNominaC extends Controlador{

        public function __construct(){
            $this->agregarNominaM = $this->modelo('agregarNominaM');
            
        }

        public function index(){

            $cedula = $this->agregarNominaM->obtenerNumeroCedula();
            $infoPersona = $this->agregarNominaM->obtenerInfoPersona();
            //$informacionItems = $this->stockM->obtenerItemInfo();
            

            $datos = [
                'cd' => $cedula,
                'infoPersona' => $infoPersona
                
                //'info' =>$informacionItems,
                
            ];

            $this->vista('paginas/agregarNomina', $datos);

        }
        
        public function agregarItem(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
 
                     'opInsertarItem' => trim($_POST['opcionesInsertarItem']),

                 ]; 
 
                 if($this->agregarNominaM->agregarItem($datos)){
                     redireccionar('nominaC');
                 }else{
                     die('Algo salio muy mal');
 
                 }
             }else{
                 $datos = [
                     'opInsertarItem' => '',
                     ];
 
                     $this->vista('paginas/agregar', $datos);
 
             }
            
        }

        public function editar($idItm){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'idItem' => $idItm,
                    'cantidadP' => trim($_POST['cantidadProducto']),
                ]; 
 
                if($this->stockM->editarStockItem($datos)){
                    redireccionar('stockC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{

                $actualizacion = $this->stockM->obtenerIdItem($idItm);

                $datos = [
                    'idItem' => $actualizacion->idItemPedido ,
                    'cantidadP' => $actualizacion->stock
                ];
 
                $this->vista('paginas/actualizarStock', $datos);
 
             }

        }

        public function editarNulo($idItm){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'idItem' => $idItm,
                    'cantidadP' => trim($_POST['cantidadProducto']),
                ]; 
 
                if($this->stockM->editarStockItemNulo($datos)){
                    redireccionar('stockC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{

                $actualizacion = $this->stockM->obtenerIdItem($idItm);

                $datos = [
                    'idItem' => $actualizacion->idItemPedido ,
                    'cantidadP' => $actualizacion->stock
                ];
 
                $this->vista('paginas/actualizarStock', $datos);
 
             }
        }

        public function borrar(){

        }

}

?>