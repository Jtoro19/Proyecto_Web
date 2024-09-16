<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Características</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') <!-- Top header -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Características</h2>

        <!-- Tabla de características -->
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código de la Característica</th>
                        <th scope="col">Código del Producto</th>
                        <th scope="col">Nombre de la Característica</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($characteristics as $characteristic)
                        <tr>
                            <td>{{ $characteristic->id }}</td>
                            <td>{{ $characteristic->productID }}</td>
                            <td>{{ $characteristic->characteristicName }}</td>
                            <td>
                                <form method="POST" action="{{route('characteristics.destroy', $characteristic->id)}}" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- Cierre de table-responsive -->

        <div class="container my-5">
            <h2 class="text-center mb-4">Crear Características</h2>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('characteristics.store') }}" method="POST">
                        @csrf
                        <!-- Agregar campo oculto para enviar el productID -->
                        <input type="hidden" name="productID" value="{{ $productID }}">
                        
                        <div class="mb-3">
                            <label for="characteristicName" class="form-label">Nombre de la Característica</label>
                            <input type="text" class="form-control" id="characteristicName" name="characteristicName" placeholder="Ingresa el nombre de la característica">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Crear Característica</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- Cierre de container my-5 -->

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
