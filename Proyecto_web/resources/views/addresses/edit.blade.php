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
        <h2 class="text-center mb-4">Crear Dirección</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('addresses.update', $address->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="userID" value="3">
                    
                    <div class="mb-3">
                        <label for="addressName" class="form-label">Nombre de la Dirección</label>
                        <input type="text" class="form-control" id="addressName" name="addressName" placeholder="Ingresa el nombre de la dirección" value="{{ $address->addressName }}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="information" class="form-label">Información Adicional</label>
                        <textarea class="form-control" id="information" name="information" rows="4" placeholder="Ingresa información adicional" required>{{ $address->information }}</textarea>
                    </div>
    
                    <button type="submit" class="btn btn-primary w-100">Modificar</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>