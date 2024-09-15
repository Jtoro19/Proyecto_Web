<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card product-container">
                    <div class="card-header text-center product-header">
                        <h2>{{ $product->productName }}</h2>
                    </div>
                    <div class="card-body product-details">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150'  }}" class="card-img-top" alt="Producto">
                            </div>
                            <div class="col-md-6">
                                <h4>ID del Producto: <span class="text-white">#{{ $product->id }}</span></h4>
                                <h5>Código del Vendedor: <span class="text-white">#{{ $product->userID }}</span></h5>
                                <h4 class="my-3">Precio: <span class="text-success">${{ number_format($product->price, 2) }}</span></h4>
                                <h5>Stock: <span class="text-white">{{ $product->stock > 0 ? 'Disponible' : 'Agotado' }}</span></h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-white">Descripción</h5>
                                <p class="text-white">{{ $product->description }}</p>
                                <h5 class="text-white">Características</h5>
                                @if($characteristics->isEmpty())
                                    <p class="text-white">No hay características disponibles.</p>
                                @else
                                    <ul class="text-white">
                                        @foreach($characteristics as $characteristic)
                                            <li>{{ $characteristic->characteristicName }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <a href="{{ route('products.purchase', ['id' => $product->id]) }}" class="btn btn-custom btn-lg">Agregar al Carrito</a>
                    </div>
                </div>

                @include('partials.comments')

                <div class="card my-4">
                    <div class="card-header bg-custom-primary text-white">
                        <h5>Reseñas del Producto</h5>
                    </div>
                    <div class="card-body">
                        @if($reviews->isEmpty())
                            <p class="text-white">No hay reseñas para este producto.</p>
                        @else
                            @foreach($reviews as $review)
                                <div class="review mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <strong class="me-2">{{ $review->user->userName }}</strong>
                                        <div class="text-warning">
                                            @for ($i = 0; $i < $review->stars; $i++)
                                                <span class="bi bi-star-fill"></span>
                                            @endfor
                                            @for ($i = $review->stars; $i < 5; $i++)
                                                <span class="bi bi-star"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    <p>{{ $review->text }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
