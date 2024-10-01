<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function index()
    {
    $categories = Category::where('able', 1)->get();
    return $categories;
    }


    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return $category;
    }

    public function destroy(Category $category)
    {
    $category->able = 0;
    $category->save();
    
    return response()->json(['message' => 'The category has been successfully deactivated'], 200);
    }
}
