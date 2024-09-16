<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->able=1;
        $category->save();
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->categoryName = $request->categoryName;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->able=0;
        $category->save();
        
        return redirect()->route('categories.index');
    }
}
