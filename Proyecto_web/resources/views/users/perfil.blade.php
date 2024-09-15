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
                    <div class="data" id="name">{{ $user->userName }}</div>
                </div>
                <div class="mb-4">
                    <label for="username">Nombre de usuario</label>
                    <div class="data" id="username">{{ $user->nickname }}</div>
                </div>
                <div class="mb-4">
                    <label for="email">Correo</label>
                    <div class="data" id="email">{{ $user->email }}</div>
                </div>
                <div>
                    <label for="phone">Teléfono</label>
                    <div class="data" id="phone">{{ $user->phoneNumber }}</div>
                </div>

                <!-- Sección de Direcciones -->
                <div class="address-section mt-5 d-flex justify-content-between align-items-center">
                    <div>
                        <label for="addresses">Direcciones</label>
                        <ul class="list-group" id="addresses">
                            @forelse ($addresses as $address)
                                @if($address->able)
                                    <li class="list-group-item">{{ $address->addressName }}</li>
                                @else
                                    <li class="list-group-item">No hay direcciones registradas.</li>
                                @endif
                            @empty
                                <li class="list-group-item">No hay direcciones registradas.</li>
                            @endforelse
                        </ul>
                    </div>
                    <div>
                        <button class="btn btn-primary">Gestionar Direcciones</button>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="profile-actions mt-4">
            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Editar</a>
            <form method="POST" action="{{route('users.destroy', $user->id)}}" style="display: inline">
                @csrf
                @method('DELETE')    
                <button class="btn btn-danger">Borrar cuenta</button>
            </form>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>