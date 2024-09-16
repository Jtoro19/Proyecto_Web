<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheaderManage') 

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Usuarios Registrados</h2>

        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código del Usuario</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Email</th>
                        <th scope="col">Número de Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    @if($user->able)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->roleID}}</td>
                        <td>{{$user->userName}}</td>
                        <td>{{$user->nickname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phoneNumber}}</td>
                        <td>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                            <form method="POST" action="{{route('users.destroy', $user->id)}}" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.footer') 

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
