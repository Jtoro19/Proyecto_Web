<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="container my-5">
        <h2 class="text-center mb-4">Editar Producto</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>

                    <div class="mb-3">
                        <label for="nombre_producto" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre_producto" placeholder="Ingresa el nombre del producto">
                    </div>


                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" placeholder="Ingresa el precio del producto">
                    </div>


                    <div class="mb-3">
                        <label for="cantidad_disponible" class="form-label">Cantidad Disponible</label>
                        <input type="number" class="form-control" id="cantidad_disponible" placeholder="Ingresa la cantidad disponible">
                    </div>


                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="4" placeholder="Ingresa la descripción del producto"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary w-100">Modificar</button>
                </form>
            </div>
        </div>
    </div>

    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
