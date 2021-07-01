<?php 

    class agregarPersonaC extends Controlador{


        public function __construct(){
            
            $this->agregarPersonaM =$this->modelo('agregarPersonaM');
        } 

        public function index(){
            
      
            $datos = [

                
            ];

            $this->vista('paginas/agregarPersona', $datos);

        }

        
        public function agregarPersona(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

               $datos = [ 
                    'nCedula' => trim($_POST['nCedula']),
                    'nPersona' => trim($_POST['nPersona']),
                    'aPersona' => trim($_POST['aPersona']),
                    'fotoPersona' => subirFoto(),
                    
                ]; 

                if($this->agregarPersonaM->agregarProducto($datos)){
                    redireccionar('nominasC');
                }else{
                    die('Algo salio muy mal');

                }
            }else{
                $datos = [
                    'nCedula' => '',
                    'nPersona' => '',
                    'aPersona' => '',
                    ];

                    $this->vista('paginas/inicioC', $datos);

            }
        }

        
    }

    function subirFoto(){

        $carpeta = __DIR__.'/../../public/uploads/';

        $archivo = $carpeta . $_FILES['fotoPersona']['name'];

        move_uploaded_file($_FILES['fotoPersona']['tmp_name'], $archivo);

        return $_FILES['fotoPersona']['name'];
    }


?>