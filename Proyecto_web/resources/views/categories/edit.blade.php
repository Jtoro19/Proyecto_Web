<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')
    <div class="container my-5">
        <h2 class="text-center mb-4">Crear Categoría</h2>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Nombre de la Categoría</label>
                        <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Ingresa el nombre de la categoría" value="{{ $category->categoryName }}">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Modificar</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('partials.footer')
</body>
</html>