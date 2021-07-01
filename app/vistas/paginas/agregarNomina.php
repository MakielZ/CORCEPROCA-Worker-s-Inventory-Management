<?php
   require_once '../app/vistas/inc/header.php'; 
?>

<div class="card">

    <div class="card-body">
    
        <div class="container-fluid mb-4 mt-4">
            <div class="row">
                <div class="col-4">
                    <div class="container-fluid mt-2"> 
                        <a class="btn btn-success text-light mt-1" href="<?php RUTA_URL?>administradorC">
                            Volver
                        </a>   
                    </div>
                </div> 
            </div>
        </div>     

        <div class="container-fluid mb-4 mt-4">
            <div class="row">

                <div class="col">
                    <div class="container-fluid mt-2"> 
                        <form name="busqueda" action="agregarNominaC/agregarItem" method="post">
                                <?php foreach ($datos['cd'] as $insertarItem):

                                    $opcionesItemID = $insertarItem->cedula;
                            
                            
                                endforeach ?>

                                <input id="myBtn" type="submit" name="submit" class="mb-3 border btn-login mt-3" value="Actualizar catalogo">
                        </form>  
                    </div>
                </div>

                <div class="col-xl-12 overflow-auto">
                    <div style="height: 30rem;" class="container-fluid overflow-auto">
                        <div class="card container overflow-auto">
                            <div class="card-body overflow-auto">
                                <table class="table">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Acciones</th>
                                            <th></th>
                                            <th></th>
                                        </tr>    
                                    </thead>
                                    <tbody>
                                        <?php foreach($datos['infoPersona'] as $infoP) :?>
                                            <tr>
                                                <td><?php echo $infoP->cedula?></td>
                                                <td><?php echo $infoP->nombre?></td>
                                                <td><?php echo $infoP->apellido?></td>

                                                <td>
                                                    <a href="<?php RUTA_URL?>stockC/editar/<?php echo $int = (int)$itemsTabla->idItemPedido;?>">
                                                        <button class="btn btn-info">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </td>  
                                                <td>
                                                    <a href="<?php RUTA_URL?>stockC/borrar/<?php echo $int = (int)$itemsTabla->idItemPedido;?>">
                                                        <button class="btn btn-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </td>     
                                            </tr>         
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>


    </div>
</div>





<?php require_once '../app/vistas/inc/footer.php'; ?>
