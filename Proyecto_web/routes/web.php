<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/producto_compra', function() {
    return view('/producto_compra');
});

Route::get('/compra', function() {
    return view('/compra');
});

Route::get('/envio', function() {
    return view('/envio');
});

Route::get('/index_producto', function() {
    return view('/index_producto');
});

Route::get('/index_usuario', function() {
    return view('/index_usuario');
});


Route::resource('index_usuario', UsersController::class);
Route::get('/index_usuario', [UsersController::class, 'index'])->name('users.index');

Route::post('/index_usuario', [UsersController::class, 'store'])->name('users.store');