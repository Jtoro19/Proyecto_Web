<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Envíos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') <!-- Top header -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Envíos</h2>

        <!-- Tabla de Envíos -->
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código del Envío</th>
                        <th scope="col">Código del Usuario</th>
                        <th scope="col">Código de la Dirección</th>
                        <th scope="col">Fecha de Salida</th>
                        <th scope="col">Fecha de Entrega</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Nombre del Receptor</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplos de filas de envíos -->
                    <tr>
                        <td>ENV001</td>
                        <td>USR001</td>
                        <td>DIR001</td>
                        <td>2024-08-01</td>
                        <td>2024-08-05</td>
                        <td>En Transito</td>
                        <td>$25.00</td>
                        <td>Juan Pérez</td>
                        <td>
                            <a href="/shipments/info" class="btn btn-info btn-sm">Consultar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>ENV002</td>
                        <td>USR002</td>
                        <td>DIR002</td>
                        <td>2024-08-02</td>
                        <td>2024-08-06</td>
                        <td>Entregado</td>
                        <td>$30.00</td>
                        <td>María López</td>
                        <td>
                            <a href="/shipments/info"" class="btn btn-info btn-sm">Consultar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>ENV003</td>
                        <td>USR003</td>
                        <td>DIR003</td>
                        <td>2024-08-03</td>
                        <td>2024-08-07</td>
                        <td>En Espera</td>
                        <td>$20.00</td>
                        <td>Carlos García</td>
                        <td>
                            <a href="/shipments/info" class="btn btn-info btn-sm">Consultar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
