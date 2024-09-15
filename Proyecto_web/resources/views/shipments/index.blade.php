<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Envíos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    @foreach($shipments as $shipment)
                    <tr>
                        <td>{{ $shipment->id }}</td>
                        <td>{{ $shipment->userID }}</td>
                        <td>{{ $shipment->addressID }}</td>
                        <td>{{ $shipment->departureDate }}</td>
                        <td>{{ $shipment->deliveryDate }}</td>
                        <td>{{ $shipment->status }}</td>
                        <td>${{ number_format($shipment->cost, 2) }}</td>
                        <td>{{ $shipment->recipientName }}</td>
                        <td>
                            <a href="/shipments/info/{{ $shipment->id }}" class="btn btn-info btn-sm">Consultar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

