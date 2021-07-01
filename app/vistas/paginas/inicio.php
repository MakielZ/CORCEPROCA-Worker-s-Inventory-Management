<?php require_once '../app/vistas/inc/header.php'; 

?>

    <div id="main_panel_container" class="container">
        <div class="row justify-content-center">

            <div class="col-3">
                <a href="<?php RUTA_URL ?>nominasC">
                    <div class="card text-white">
                        <img src="img/panel-2.jpg" class="card-img-top" alt="">
                        <div id="initial-card" class="card-img-overlay d-flex  justify-content-end">
                            <span>Nóminas</span>
                        </div>
                    </div>
                </a>    
            </div>

            <div class="col-3">
                <a href="<?php RUTA_URL?>consultaProductoC">
                    <div class="card text-white">
                        <img src="img/panel-3.jpg" class="card-img-top" alt="">
                        <div id="initial-card" class="card-img-overlay d-flex flex-column justify-content-lg-end">
                            <span>Inventario</span>
                        </div>
                    </div>
                </a>    
            </div>

            <div class="col-3">
                <a href="<?php RUTA_URL?>asistenciasC">
                    <div class="card text-white">
                        <img src="img/panel-1.jpg" class="card-img-top" alt="">
                        <div id="initial-card" class="card-img-overlay d-flex flex-column justify-content-end">
                            <span>Asistencias</span>
                        </div>
                    </div>
                </a>    
            </div>
        </div>  

        <div class="row justify-content-center mt-3">

            <div class="col-3">
                <a href="<?php RUTA_URL?>usuarioC">
                    <div class="card text-white">
                        <img src="img/panel-4.jpg" class="card-img-top" alt="">
                        <div id="initial-card" class="card-img-overlay d-flex  justify-content-end">
                            <span>Usuarios</span>
                        </div>
                    </div>
                </a>    
            </div>

            <div class="col-3">
                <a href="<?php RUTA_URL?>horariosMenuC">
                    <div class="card text-white">
                        <img src="img/panel-5.jpg" class="card-img-top" alt="">
                        <div id="initial-card" class="card-img-overlay">
                            <span>Horarios</span>
                        </div>
                    </div>
                </a>    
            </div>

            
        </div>

    </div>

    <?php require_once '../app/vistas/inc/footer.php'; ?>
