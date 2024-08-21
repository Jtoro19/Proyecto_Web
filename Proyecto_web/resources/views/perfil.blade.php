<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('partials.topheader')

    <div class="profile-container">
        <div class="d-flex align-items-center">
            <div class="me-5">
                <div class="profile-photo">
                    Foto usuario
                </div>
            </div>
            <div class="profile-details">
                <div class="mb-4">
                    <label for="name">Nombre</label>
                    <div class="data" id="name">Juan Pérez</div>
                </div>
                <div class="mb-4">
                    <label for="username">Nombre de usuario</label>
                    <div class="data" id="username">juan123</div>
                </div>
                <div class="mb-4">
                    <label for="email">Correo</label>
                    <div class="data" id="email">juan.perez@email.com</div>
                </div>
                <div>
                    <label for="phone">Teléfono</label>
                    <div class="data" id="phone">+57 300 123 4567</div>
                </div>

                <!-- Sección de Direcciones -->
                <div class="address-section mt-5">
                    <label for="addresses">Direcciones</label>
                    <ul class="list-group" id="addresses">
                        <li class="list-group-item">Calle 123, Ciudad ABC</li>
                        <li class="list-group-item">Carrera 45, Ciudad XYZ</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="profile-actions">
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Borrar cuenta</button>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>