<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader') <!-- Top header -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Categorías</h2>

        <!-- Tabla de Categorías -->
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código de la Categoría</th>
                        <th scope="col">Nombre de la Categoría</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        @if($category->able)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->categoryName}}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm me-2">Editar</a>
                                <form method="POST" action="{{route('categories.destroy', $category->id)}}" style="display: inline">
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
            <div class="container my-5">
                <h2 class="text-center mb-4">Crear Categoría</h2>

                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="categoryName" class="form-label">Nombre de la Categoría</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Ingresa el nombre de la categoría">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Ingresa la descripción de la categoría"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Crear Categoría</button>

                        </form>
                    </div>
                </div>
            </div>


    @include('partials.footer') <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
