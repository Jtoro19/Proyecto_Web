<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurchaseProduct</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')
    @include('partials.botheader') 

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card product-container">
                    <div class="card-header text-center product-header">
                        <h2>Nombre del Producto</h2>
                    </div>
                    <div class="card-body product-details">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/500x500" class="img-fluid rounded" alt="Producto">
                            </div>
                            <div class="col-md-6">
                                <h4>ID del Producto: <span class="text-white">#12345</span></h4>
                                <h5>Código del Vendedor: <span class="text-white">#V001</span></h5>
                                <h4 class="my-3">Precio: <span class="text-success">$499.99</span></h4>
                                <h5>Stock: <span class="text-white">Disponible</span></h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-white">Descripción</h5>
                                <p class="text-white">Este es un producto de ejemplo. Aquí iría una descripción detallada del mismo, destacando sus características, funciones y otros detalles relevantes para el comprador.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-custom btn-lg">Agregar al Carrito</a>
                    </div>
                </div>


                @include('partials.comments')


                @include('partials.reviews')

            </div>
        </div>
    </div>

    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
