<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Direcciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Direcciones</h2>

        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código de la Dirección</th>
                        <th scope="col">Código del Usuario</th>
                        <th scope="col">Nombre de la Dirección</th>
                        <th scope="col">Información</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($addresses as $address)
                        @if($address->able)
                            <tr>
                                <td>{{ $address->id }}</td>
                                <td>{{ $address->userID }}</td>
                                <td>{{ $address->addressName }}</td>
                                <td>{{ $address->information }}</td>
                                <td>
                                    <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning me-2">Editar</a>
                                    <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center mb-4">Crear Dirección</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('addresses.store') }}" method="POST">
                    @csrf
                    
                    <input type="hidden" name="userID" value="3">
                    
                    <div class="mb-3">
                        <label for="addressName" class="form-label">Nombre de la Dirección</label>
                        <input type="text" class="form-control" id="addressName" name="addressName" placeholder="Ingresa el nombre de la dirección">
                    </div>
    
                    <div class="mb-3">
                        <label for="information" class="form-label">Información Adicional</label>
                        <textarea class="form-control" id="information" name="information" rows="4" placeholder="Ingresa información adicional"></textarea>
                    </div>
    
                    <button type="submit" class="btn btn-primary w-100">Crear Dirección</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
