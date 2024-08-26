<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AddressessController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CharacteristicsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReceiptsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ShipmentsController;

//this is a comment

Route::get('/', function () {
    return view('/inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inicio', function() {
    return view('/inicio');
});

Route::get('/iniciologin', function() {
    return view('/iniciologin');
});

Route::get('/perfil', function() {
    return view('/perfil');
});

Route::get('/products/purchase', function() {
    return view('/products/purchase');
});

Route::get('/compra', function() {
    return view('/compra');
});

Route::get('/envio', function() {
    return view('/envio');
});

Route::get('/products/info', function() {
    return view('/products/info');
});


Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}',[UsersController::class,'edit'])->name('users.edit');
Route::delete('/users/{id}',[UsersController::class,'destroy'])->name('users.destroy');

Route::get('/products/index', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

Route::get('/addresses/index', [AddressesController::class, 'index'])->name('addresses.index');
Route::post('/addresses', [AddressesController::class, 'store'])->name('addresses.store');
Route::get('addresses/edit/{id}',[AddressesController::class,'edit'])->name('addresses.edit');
Route::delete('/addresses/{id}',[AddressesController::class,'destroy'])->name('addresses.destroy');
