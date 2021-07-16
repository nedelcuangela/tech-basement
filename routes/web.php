<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;



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

Auth::routes();

Route::view('/', 'home');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:id}/edit', [UserController::class, 'edit']);
Route::patch('/users/{user:id}/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');



Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product:id}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product:id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product:id}/update', [ProductController::class, 'update'])->name('products.update');







//Route::resource('users', UserController::class);
//Route::resource('products', ProductController::class);




