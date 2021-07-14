<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:id}/edit', [UserController::class, 'edit']);
Route::patch('/users/{user:id}/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');

//Route::resource('users.destroy', UserController::class);



