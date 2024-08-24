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
    @include('partials.topheader') 

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Usuarios Registrados</h2>

        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código del Usuario</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Número de Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>#U001</td>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>juan.perez@example.com</td>
                        <td>jperez</td>
                        <td>+57 300 123 4567</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>


                    <tr>
                        <td>#U002</td>
                        <td>2</td>
                        <td>María Gómez</td>
                        <td>maria.gomez@example.com</td>
                        <td>mgomez</td>
                        <td>+57 310 987 6543</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>


                    <tr>
                        <td>#U003</td>
                        <td>3</td>
                        <td>Carlos Rodríguez</td>
                        <td>carlos.rodriguez@example.com</td>
                        <td>crodriguez</td>
                        <td>+57 320 654 3210</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>


                    <tr>
                        <td>#U004</td>
                        <td>1</td>
                        <td>Ana Martínez</td>
                        <td>ana.martinez@example.com</td>
                        <td>amartinez</td>
                        <td>+57 301 555 1234</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>


                    <tr>
                        <td>#U005</td>
                        <td>1</td>
                        <td>Pedro Sánchez</td>
                        <td>pedro.sanchez@example.com</td>
                        <td>psanchez</td>
                        <td>+57 312 666 7890</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @include('partials.footer') 

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
