<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    
    public function index()
    {
    // Filtra los productos por el ID del usuario autenticado
    $products = Product::where('userID', Auth::id())->get();
    
    // Obtiene todas las categorías
    $categories = Category::all();
    
    return view('products.index', ['products' => $products, 'categories' => $categories]);
    }



    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->userID = $request->userID;
        $product->productName = $request->productName;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->categID = $request->categID;
        $product->able = 1;
        $product->save();
        return redirect()->route('products.index');
    }

    public function showCatalog()
    {
    $categories = Category::all();
    $products = Product::all()->groupBy('categID');
    return view('/inicio', compact('categories', 'products'));
    }

    public function showCatalogLogin()
    {
    $categories = Category::all();
    $products = Product::all()->groupBy('categID');
    return view('/iniciologin', compact('categories', 'products'));
    }    


    public function showInfo($id)
    {
    // Busca el producto por ID
    $product = Product::find($id);

    // Verifica si el producto existe
    if (!$product) {
        return redirect()->route('products.index')->with('error', 'Producto no encontrado');
    }

    // Obtén las características del producto
    $characteristics = $product->characteristics;

    // Obtén las reseñas del producto
    $reviews = $product->reviews()->with('user')->get(); // Asume que existe una relación reviews en el modelo Product

    // Pasa el producto, las características y las reseñas a la vista
    return view('products.info', [
        'product' => $product,
        'characteristics' => $characteristics,
        'reviews' => $reviews
    ]);
    }
    
    public function showPurchaseSummary($id)
    {
    // Busca el producto por ID
    $product = Product::find($id);

    // Verifica si el producto existe
    if (!$product) {
        return redirect()->route('products.index')->with('error', 'Producto no encontrado');
    }

    // Obtiene el usuario autenticado
    $user = Auth::user();

    // Busca las direcciones del usuario autenticado
    $addresses = Address::where('userID', $user->id)->get();

    // Pasa el producto y las direcciones a la vista de resumen de compra
    return view('products.purchase', [
        'product' => $product,
        'addresses' => $addresses
    ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all(); // Asegúrate de tener un modelo Category
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        //$product->userID = $request->userID;
        $product->productName = $request->productName;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->categID = $request->categID;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->able=0;
        $product->save();
        return redirect()->route('products.index');
    }
}
