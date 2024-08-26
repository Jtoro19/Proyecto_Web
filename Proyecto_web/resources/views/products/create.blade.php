<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')
    <div class="container my-5">
        <h2 class="text-center mb-4">Crear Producto</h2>
    
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Ingresa el nombre del producto">
                    </div>
    
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Ingresa el precio del producto">
                    </div>
    
                    <div class="mb-3">
                        <label for="stock" class="form-label">Cantidad Disponible</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingresa la cantidad disponible">
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Ingresa la descripción del producto"></textarea>
                    </div>
    
                    <button type="submit" class="btn btn-primary w-100">Crear</button>
                </form>
            </div>
        </div>
    </div>
    
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>