<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
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

    // Pasa el producto a la vista
    return view('products.info', ['product' => $product]);
    }   

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
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
