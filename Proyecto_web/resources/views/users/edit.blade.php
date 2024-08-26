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

    <div class="container my-5">
        <h2 class="text-center mb-4">Editar Usuario</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('users.update', $user->id) }}" method="POST">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" value="{{ $user->userName }}">
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="nombre_usuario" class="form-label">Nombre de Usuario
                        <input type="text" class="form-control" id="nombre_usuario" placeholder="Ingresa el nombre de usuario" value="{{ $user->nickname }}">
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                        <input type="email" class="form-control" id="email" placeholder="Ingresa el email" value="{{ $user->email }}">
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Número de Teléfono
                        <input type="tel" class="form-control" id="telefono" placeholder="Ingresa el número de teléfono" value="{{ $user->phoneNumber }}">
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Modificar</button>
                </form>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <!-- comment -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>