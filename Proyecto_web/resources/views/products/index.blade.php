<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Lista de Productos</h2>

                <!-- Aquí se recorrerán los productos traídos desde la base de datos -->
                @foreach ($products as $product)
                    @if($product->able)
                        <div class="card product-container mb-4">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid rounded-start" alt="Imagen de {{ $product->productName }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body product-details">
                                        <h5 class="card-title text-white">{{ $product->productName }}</h5>
                                        <p class="text-white">Código del Producto: #{{ $product->id }}</p>
                                        <p class="text-white">Código del Vendedor: #{{ $product->userID }}</p>
                                        <p class="text-white">Precio: ${{ $product->price }}</p>
                                        <p class="text-white">Stock: {{ $product->stock }}</p>
                                        <p class="text-white">Descripción: {{ $product->description }}</p>
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('characteristics.index', ['productID' => $product->id]) }}" class="btn btn-warning me-2">Añadir Característica</a>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning me-2">Editar</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @if ($products->isEmpty())
                    <p class="text-white text-center">No hay productos disponibles.</p>
                @endif

                <div class="container my-5">
                    <h2 class="text-center mb-4">Crear Producto</h2>
                
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('products.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="userID" value="{{ Auth::id() }}">
                                
                                <div class="mb-3">
                                    <label for="productName" class="form-label">Nombre del Producto</label>
                                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Ingresa el nombre del producto">
                                </div>
                
                                <div class="mb-3">
                                    <label for="price" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Ingresa el precio del producto">
                                </div>
                
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Cantidad Disponible</label>
                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingresa la cantidad disponible">
                                </div>
                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Ingresa la descripción del producto"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="categID" class="form-label">Categoría</label>
                                    <select class="form-select" id="categID" name="categID">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-2">Añadir Categoría</a>

                                </div>

                                <button type="submit" class="btn btn-primary w-100">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

