<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Facturas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheaderManage')

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Items</h2>

        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código del producto</th>
                        <th scope="col">Código de la factura</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($items as $item)
                <tr>
                    <td>{{$item->productID}}</td>
                    <td>{{$item->receiptID}}</td>
                    <td>{{$item->quantity}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.footer') 

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>