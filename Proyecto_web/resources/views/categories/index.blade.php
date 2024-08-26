<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Categorías</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') <!-- Top header -->
    @include('partials.botheader') <!-- Bot header -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Gestión de Categorías</h2>

        <!-- Tabla de Categorías -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Código del Producto</th>
                        <th>Código de la Categoría</th>
                        <th>Nombre de la Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de filas de categoría -->
                    <tr>
                        <td>001</td>
                        <td>CAT001</td>
                        <td>Tecnología</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>CAT002</td>
                        <td>Hogar</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>CAT003</td>
                        <td>Ropa</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Botón Agregar Categoría -->
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary btn-lg w-100">Agregar Categoría</a>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
