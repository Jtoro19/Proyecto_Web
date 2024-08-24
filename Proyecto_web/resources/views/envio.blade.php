<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Envío</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card product-container">
                    <div class="card-header text-center product-header">
                        <h2>Detalles del Envío</h2>
                    </div>
                    <div class="card-body product-details">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/500x500" class="img-fluid rounded" alt="Producto">
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-white">Nombre del Producto</h4>
                                <p class="text-white">Código del Producto: <span class="text-white">#12345</span></p>
                            </div>
                        </div>

                        <hr>


                        <div class="mb-4">
                            <h5 class="text-white">Información del Envío</h5>
                            <p class="text-white">Código de Usuario: <span class="text-white">#U001</span></p>
                            <p class="text-white">Referencia de Factura: <span class="text-white">#F001234</span></p>
                            <p class="text-white">Fecha de Salida: <span class="text-white">01/09/2024</span></p>
                            <p class="text-white">Fecha Estimada de Entrega: <span class="text-white">05/09/2024</span></p>
                            <p class="text-white">Dirección de Envío: <span class="text-white">Calle Falsa 123, Ciudad XYZ</span></p>
                            <p class="text-white">Estado del Envío: <span class="text-success">En tránsito</span></p>
                        </div>

                        <hr>


                        <div class="mb-4">
                            <h5 class="text-white">Costo Total</h5>
                            <p class="text-white">Costo del Producto: <span class="text-success">$499.99</span></p>
                            <p class="text-white">Costo del Envío: <span class="text-success">$9.99</span></p>
                            <h5 class="text-white">Total: <span class="text-success">$509.98</span></h5>
                        </div>

                        <hr>


                        <div class="mb-4">
                            <h5 class="text-white">Destinatario</h5>
                            <p class="text-white">Nombre del Destinatario: <span class="text-white">Juan Pérez</span></p>
                            <p class="text-white">Dirección de Entrega: <span class="text-white">Calle Falsa 123, Ciudad XYZ</span></p>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-custom btn-lg">Volver al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer') 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
