<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Envío</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') <!-- Top header -->

    <div class="container my-5">
        <h2 class="text-center mb-4 text-white">Detalles del Envío</h2>

        <div class="card">
            <div class="card-header bg-custom">
                <h5 class="card-title mb-0">Resumen del Envío</h5>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-4">Código del Envío:</dt>
                    <dd class="col-sm-8">{{ $shipment->id }}</dd>

                    <dt class="col-sm-4">Código del Usuario:</dt>
                    <dd class="col-sm-8">{{ $shipment->userID }}</dd>

                    <dt class="col-sm-4">Código de la Dirección:</dt>
                    <dd class="col-sm-8">{{ $shipment->addressID }}</dd>

                    <dt class="col-sm-4">Fecha de Salida:</dt>
                    <dd class="col-sm-8">{{ $shipment->departureDate }}</dd>

                    <dt class="col-sm-4">Fecha de Entrega:</dt>
                    <dd class="col-sm-8">{{ $shipment->deliveryDate }}</dd>

                    <dt class="col-sm-4">Estado:</dt>
                    <dd class="col-sm-8">{{ $shipment->status }}</dd>

                    <dt class="col-sm-4">Costo:</dt>
                    <dd class="col-sm-8">${{ number_format($shipment->cost, 2) }}</dd>

                    <dt class="col-sm-4">Nombre del Receptor:</dt>
                    <dd class="col-sm-8">{{ $shipment->recipientName }}</dd>
                </dl>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('shipments.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


