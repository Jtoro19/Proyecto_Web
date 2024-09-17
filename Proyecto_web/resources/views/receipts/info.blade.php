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
                    <dt class="col-sm-4">Código del Recibo:</dt>
                    <dd class="col-sm-8">{{ $receipt->id }}</dd>

                    <dt class="col-sm-4">Precio total:</dt>
                    <dd class="col-sm-8">{{ $receipt->totalPrice }}</dd>

                    <dt class="col-sm-4">Fecha:</dt>
                    <dd class="col-sm-8">{{ $receipt->date}}</dd>

            </div>
            <div class="card-footer text-end">
                <a href="{{route('reportsU.users.downloadReceiptPDF',$receipt->id)}}" class="btn btn-primary">Descargar Recibo</a>
            </div>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>