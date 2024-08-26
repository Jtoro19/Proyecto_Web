<div class="container my-5 catalog-container">
    <h1 class="text-center mb-4">Catálogo de Productos</h1>

    <!-- Computadores -->
    <h2 id="compu_section" class="mb-4">Computadores</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->productName }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->productName }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Precio: ${{ number_format($product->price) }}</strong></p>
                    </div>
                    <div class="card-footer">
                        <a href="/products/info" class="btn btn-custom w-100">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Celulares -->
    <h2 id="cellphone_section" class="my-4">Celulares</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->productName }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->productName }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Precio: ${{ number_format($product->price) }}</strong></p>
                    </div>
                    <div class="card-footer">
                        <a href="/products/info" class="btn btn-custom w-100">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
