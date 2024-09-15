<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.topheader')
    <form action="{{ route('receipts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
        <input type="hidden" name="totalPrice" id="hiddenTotalPrice" value="{{ number_format($product->price, 2) }}">
        <input type="hidden" name="productID" value="{{ $product->id }}"> <!-- Enviar el productID -->

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card product-container">
                        <div class="card-header text-center product-header">
                            <h2>Resumen de Compra</h2>
                        </div>
                        <div class="card-body product-details">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/500x500' }}" class="img-fluid rounded" alt="{{ $product->productName }}">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-white">{{ $product->productName }}</h4>
                                    <h5 class="my-3">Precio Unitario: <span class="text-success">${{ number_format($product->price, 2) }}</span></h5>

                                    <div class="mb-3">
                                        <label for="quantity" class="form-label text-white">Cantidad</label>
                                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" data-price="{{ $product->price }}" onchange="updateTotalPrice({{ $product->price }})">
                                    </div>

                                    <h5>Total: <span class="text-success" id="totalPrice">${{ number_format($product->price, 2) }}</span></h5>
                                </div>
                            </div>

                            <hr>

                            <div class="mb-4">
                                <h5 class="text-white">Seleccionar Dirección</h5>
                                <div class="form-group mb-3">
                                    <select class="form-select">
                                        @foreach($addresses as $address)
                                            @if($address->able)
                                                <option value="{{ $address->id }}">{{ $address->addressName }}</option>
                                            @else
                                                <option value="{{ $address->id }}" disabled>{{ $address->addressName }} (No disponible)</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <a href="/addresses/index" class="btn btn-outline-light">Añadir nueva dirección</a>
                            </div>

                            <hr>

                            <div class="mb-4">
                                <h5 class="text-white">Costo de Envío</h5>
                                <p class="text-white">Costo del Envío: <span class="text-success">$9.99</span></p>
                            </div>

                            <hr>

                            <div class="mb-3">
                                <h5 class="text-white">Nombre del Destinatario</h5>
                                <input type="text" class="form-control" placeholder="Nombre de la persona que recibirá el producto">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-custom btn-lg">Realizar Compra</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
