<?php require_once '../app/vistas/inc/header.php'; ?>


<div class="container-fluid">
        <div class="container-lg">
            <span class="titles">Agregar producto</span>
            <br>

            <div class="card card-body mt-2">

                <form action="<?php RUTA_URL;?>accionesC/agregar" id="formAgregarProducto"  method="POST" enctype="multipart/form-data">
                                    
                    <div class="form-group">
                        <label for="nProducto">Producto</label>
                        <input type="text" name="nProducto" class="form-control form-control-sm">

                    </div> 

                    <div class="form-group">
                        <label for=deProducto">Descripcion</label>
                        <textarea class="form-control" name="deProducto" rows="4"></textarea>
                    </div> 
                    
                    <div class="form-group">
                        <label for="afProducto">Año de fabricacion</label>
                        <input type="text" name="afProducto" class="form-control form-control-sm">
                    </div>  

                    <div class="form-group">
                        <label for="pProducto">Precio</label>
                        <input type="text" name="pProducto" class="form-control form-control-sm">
                    </div> 

                    <div class="form-group">
                        <label for="fProducto">Fabricante</label>
                        <input type="text" name="fProducto" class="form-control form-control-sm">
                    </div>

                    <div class="Imagen">
                        <label for="fotoProducto">Fabricante</label>
                        <input type="file" class="form-control form-control-sm" name="fotoProducto" required>
                    </div>
                

                    <div class="row  mt-4">

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="list-group text-dark">
                                        <li class=""><i class="fas fa-laptop"></i> Computadoras: 1</li>
                                        <li class=""><i class="fas fa-headset"></i> Headsets: 2</li>
                                        <li class=""><i class="fas fa-gamepad"></i> Videojuegos: 3</li>
                                        <li class=""><i class="fab fa-playstation"></i> Consolas: 4</li>
                                        <li class=""><i class="fas fa-mobile-alt"></i> Smartphones: 5</li>
                                        <li class=""><i class="fas fa-camera"></i> Camaras: 6</li>
                                    </ul>
                                </div>            
                            </div>            
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group mt-4">
                                <label for="subProducto">Categoria a la que pertenece  </label>
                                <select name="subProducto" id="">

                                    <?php foreach ($datos['tiposCategorias'] as $i):
                                                        
                                        $options = $i->idSubCategorias;
                                        
                                        
                                    ?>
                                                
                                    <option><?php echo $options?></option>
                                    <?php endforeach ?>

                                </select>
                            </div>
                        </div>

                        
                    </div>
                    
                                    
                        <input type="submit" name="submit" class="btn btn-danger text-light" value="Agregar producto">
                                     
                </form>
            </div>
        </div>

        

</div>

<?php require_once '../app/vistas/inc/footer.php'; ?>
