<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Editar Usuario</h2>
            <form action="{{ route('users.updateProfile', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
    
                <div class="mb-3">
                    <label for="userName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Ingresa el nombre" value="{{ $user->userName }}">
                </div>
    
                <div class="mb-3">
                    <label for="nickname" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Ingresa el nombre de usuario" value="{{ $user->nickname }}">
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa el email" value="{{ $user->email }}">
                </div>
    
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Número de Teléfono</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Ingresa el número de teléfono" value="{{ $user->phoneNumber }}">
                </div>
    
                <!-- Campo oculto para mantener el valor de la contraseña -->
                <input type="hidden" name="password" value="{{ $user->password }}">
    
                <button type="submit" class="btn btn-primary w-100">Modificar</button>
            </form>
        </div>
    </div>
    
    @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>