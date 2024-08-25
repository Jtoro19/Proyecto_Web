<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') 

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Lista de Productos</h2>


                <div class="card product-container mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x500" class="img-fluid rounded-start" alt="Producto 1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body product-details">
                                <h5 class="card-title text-white">Producto 1</h5>
                                <p class="text-white">Código del Producto: #P001</p>
                                <p class="text-white">Código del Vendedor: #V001</p>
                                <p class="text-white">Precio: $49.99</p>
                                <p class="text-white">Stock: Disponible</p>
                                <p class="text-white">Descripción: Este es un producto de ejemplo que muestra cómo se verá en la lista de productos.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-warning me-2">Editar</a>
                                    <a href="#" class="btn btn-danger">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card product-container mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x500" class="img-fluid rounded-start" alt="Producto 2">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body product-details">
                                <h5 class="card-title text-white">Producto 2</h5>
                                <p class="text-white">Código del Producto: #P002</p>
                                <p class="text-white">Código del Vendedor: #V002</p>
                                <p class="text-white">Precio: $99.99</p>
                                <p class="text-white">Stock: Disponible</p>
                                <p class="text-white">Descripción: Este es otro producto de ejemplo que muestra cómo se verá en la lista de productos.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-warning me-2">Editar</a>
                                    <a href="#" class="btn btn-danger">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card product-container mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/500x500" class="img-fluid rounded-start" alt="Producto 3">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body product-details">
                                <h5 class="card-title text-white">Producto 3</h5>
                                <p class="text-white">Código del Producto: #P003</p>
                                <p class="text-white">Código del Vendedor: #V003</p>
                                <p class="text-white">Precio: $149.99</p>
                                <p class="text-white">Stock: Disponible</p>
                                <p class="text-white">Descripción: Ejemplo de cómo se puede listar un producto con la opción de editar o borrar.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-warning me-2">Editar</a>
                                    <a href="#" class="btn btn-danger">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer') 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
