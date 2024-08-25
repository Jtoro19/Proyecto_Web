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

Route::get('/purchaseProduct', function() {
    return view('/products/purchaseProduct');
});

Route::get('/compra', function() {
    return view('/compra');
});

Route::get('/envio', function() {
    return view('/envio');
});

Route::get('/indexProduct', function() {
    return view('/products/indexProduct');
});


Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('users/editUser/{id}',[UsersController::class,'edit'])->name('users.edit');
Route::delete('/users/{id}',[UsersController::class,'destroy'])->name('users.destroy');










