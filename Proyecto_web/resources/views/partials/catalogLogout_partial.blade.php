<!-- Archivo resources/views/products/catalog_partial.blade.php -->

<div class="container my-5 catalog-container">
    <h1 class="text-center mb-4">Catálogo de Productos</h1>

    @foreach($categories as $category)
        <h2 id="category_{{ $category->id }}" class="mb-4">{{ $category->categoryName }}</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @if(isset($products[$category->id]))
                @foreach($products[$category->id] as $product)
                    @if($product->able)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->productName }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->productName }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="card-text"><strong>Precio: ${{ number_format($product->price, 2) }}</strong></p>
                                </div>
                                <div class="card-footer">
                                    <!-- Enlace al producto con el ID -->
                                    <a href="/login" class="btn btn-custom w-100">Comprar</a>
                                </div>
                            </div>
                        </div>
                    @endif  
                @endforeach
            @else
                <p>No hay productos disponibles en esta categoría.</p>
            @endif
        </div>
    @endforeach
</div>



