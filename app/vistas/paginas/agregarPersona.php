<?php require_once '../app/vistas/inc/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-sm-5">

        <div class="card card-body mt-2">

            <form action="<?php RUTA_URL;?>agregarPersonaC/agregarPersona" id="formAgregarProducto"  method="POST" enctype="multipart/form-data">
                        
                <div class="form-group">
                    <label for="nCedula">Cédula</label>
                    <input type="text" name="nCedula" class="form-control form-control-sm">

                </div> 

                <div class="form-group">
                    <label for="nPersona">Nombre</label>
                    <input type="text" name="nPersona" class="form-control form-control-sm">
                </div> 
                
                <div class="form-group">
                    <label for="aPersona">Apellido</label>
                    <input type="text" name="aPersona" class="form-control form-control-sm">
                </div>  


                <div class="Imagen">
                    <label for="fotoPersona">Fabricante</label>
                    <input type="file" class="form-control form-control-sm" name="fotoPersona" required>
                </div>            
                            
                <input type="submit" name="submit" class="btn btn-danger text-light" value="Agregar producto">
                        
            </form>
        </div>
    </div>
</div>


<?php require_once '../app/vistas/inc/footer.php'; ?>
