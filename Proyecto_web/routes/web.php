<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CharacteristicsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReceiptsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ShipmentsController;
use App\Http\Controllers\Auth\RegisterController;

//this is a comment

Route::get('/', function() {
    return view('/inicio');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/inicio', function() {
    return view('/inicio');
});

Route::get('/manage', function() {
    return view('/manage');
});

Route::get('/users/perfil', function() {
    return view('/users/perfil');
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

Route::get('/addresses/index', function() {
    return view('/addresses/index');
});

Route::get('/shipments/index', function() {
    return view('/shipments/index');
});

Route::get('/shipments/info', function() {
    return view('/shipments/info');
});


Route::get('/inicio', [ProductsController::class, 'showCatalog'])->name('inicio');
Route::get('/', [ProductsController::class, 'showCatalog'])->name('');
Route::get('/iniciologin', [ProductsController::class, 'showCatalogLogin'])->name('iniciologin');
// Route::get('/home', [ProductsController::class, 'showCatalogLogin'])->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/perfil/{id}', [UsersController::class, 'showProfile'])->name('users.info');
Route::get('users/edit/{id}',[UsersController::class,'edit'])->name('users.edit');
Route::put('users/{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}',[UsersController::class,'destroy'])->name('users.destroy');

Route::get('users/editProfile/{id}',[UsersController::class,'editProfile'])->name('users.editProfile');
Route::put('users/perfil/{user}', [UsersController::class, 'updateProfile'])->name('users.updateProfile');
Route::delete('/users/perfil/{id}',[UsersController::class,'destroyProfile'])->name('users.destroyProfile');


Route::get('/categories/index', [CategoriesController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}',[CategoriesController::class,'destroy'])->name('categories.destroy');


Route::get('/products/index', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/products/info/{id}', [ProductsController::class, 'showInfo'])->name('products.info');
Route::get('/products/purchase/{id}', [ProductsController::class, 'showPurchaseSummary'])->name('products.purchase');

Route::get('/addresses/index', [AddressesController::class, 'index'])->name('addresses.index');
Route::post('/addresses', [AddressesController::class, 'store'])->name('addresses.store');
Route::get('addresses/edit/{id}',[AddressesController::class,'edit'])->name('addresses.edit');
Route::put('addresses/{address}', [AddressesController::class, 'update'])->name('addresses.update');
Route::delete('/addresses/{id}',[AddressesController::class,'destroy'])->name('addresses.destroy');

Route::get('/receipts/index', [ReceiptsController::class, 'index'])->name('receipts.index');
Route::post('/receipts', [ReceiptsController::class, 'store'])->name('receipts.store');

Route::get('/items/index', [ItemsController::class, 'index'])->name('items.index');
Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
Route::get('/receipts/info/{id}', [ReceiptsController::class, 'showInfo'])->name('receipts.info');

Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store');
Route::delete('/reviews/{id}', [ReviewsController::class, 'destroy'])->name('reviews.destroy');


Route::get('/characteristics/index/{productID}', [CharacteristicsController::class, 'index'])->name('characteristics.index');
Route::post('/characteristics', [CharacteristicsController::class, 'store'])->name('characteristics.store');
Route::put('characteristics/{category}', [CharacteristicsController::class, 'update'])->name('characteristics.update');
Route::delete('/characteristics/{id}',[CharacteristicsController::class,'destroy'])->name('characteristics.destroy');


Route::get('/shipments/index', [ShipmentsController::class, 'index'])->name('shipments.index');
Route::post('/shipments', [ShipmentsController::class, 'store'])->name('shipments.store');
Route::get('/shipments/info/{id}', [ShipmentsController::class, 'show'])->name('shipments.show');
