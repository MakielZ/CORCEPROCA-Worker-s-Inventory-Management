<?php require_once '../app/vistas/inc/header.php'; ?>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <form action="">   
                    <div class="form-group">
                        <label for="seleccionProducto">Buscar por categorias</label>
                        <div class="dropdown">

                            <input type="text" placeholder="LA CONCHA DE LA LORAAA JASKLDJAKLDAJSKLDJASD">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
               
            </div>

        </div>


    </div>

    <div class="card mt-2">
        <div class="card-body">

            <table class="mt-3 table table-info mb-3">
                <thead class="table-warning">
                    <tr>
                        <th scope="col text-dark">Codigo</th>
                        <th scope="col text-dark">Nombre del artículo</th>
                        <th scope="col text-dark">Categoria</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>24/05/2020</td>
                        <td>Videojuego</td>
                        
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>13/01/2019</td>
                        <td>Consola</td>
                        
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>20/10/2018</td>
                        <td>Telefonia</td>

                    </tr>
                    </tbody>
                </table>
        </div>
    </div>

<?php require_once '../app/vistas/inc/footer.php'; ?>
