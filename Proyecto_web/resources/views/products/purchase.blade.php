<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>

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
                        <h2>Resumen de Compra</h2>
                    </div>
                    <div class="card-body product-details">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="https://via.placeholder.com/500x500" class="img-fluid rounded" alt="Producto">
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-white">Nombre del Producto</h4>
                                <h5 class="my-3">Precio Unitario: <span class="text-success">$499.99</span></h5>
                                

                                <div class="mb-3">
                                    <label for="quantity" class="form-label text-white">Cantidad</label>
                                    <input type="number" id="quantity" class="form-control" value="1" min="1">
                                </div>

                                <h5>Total: <span class="text-success" id="totalPrice">$499.99</span></h5>
                            </div>
                        </div>
                        
                        <hr>


                        <div class="mb-4">
                            <h5 class="text-white">Seleccionar Dirección</h5>
                            <div class="form-group mb-3">
                                <select class="form-select">
                                    <option selected>Seleccione una dirección guardada</option>
                                    <option>Dirección 1: Calle Falsa 123</option>
                                    <option>Dirección 2: Avenida Siempre Viva 742</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-outline-light">Añadir nueva dirección</a>
                        </div>

                        <hr>


                        <div class="mb-4">
                            <h5 class="text-white">Costo de Envío</h5>
                            <p class="text-white">Costo del Envío: <span class="text-success">$9.99</span></p>
                        </div>

                        <hr>


                        <div class="mb-3">
                            <h5 class="text-white">Nombre del Destinatario</h5>
                            <input type="text" class="form-control" placeholder="Nombre de la persona que recibirá el producto">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-custom btn-lg">Realizar Compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer') 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>