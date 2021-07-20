<?php

use App\Http\Controllers\OrderController;
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
Route::get('/manage-orders', [OrderController::class, 'manageOrder'])->name('shop.manage');
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product:id}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product:id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product:id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('shop.shopping-cart');
Route::post('/add-to-shop/{id}', [ProductController::class, 'getAddToCart'])->name('product.AddToCart');
Route::get('/permissions', [\App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
Route::post('/shopping-cart/products', [OrderController::class, 'checkout'])->name('shop.checkout');
Route::post('/placeOrder', [OrderController::class, 'placeOrder'])->name('shop.placeOrder');
Route::get('/orders/{order}',[OrderController::class, 'showOrder'])->name('shop.order');
Route::post('/orders/{order}/update', [OrderController::class, 'orderUpdate'])->name('shop.order');



Route::get('/statistics', 'OrderController@chart')->name('shop.statistics');
Route::get('/customer/print-pdf/{order}', 'UserController@printPDF')->name('customer.printpdf');
Route::get('/orderHistory','OrderController@orderHistory')->name('shop.orderHistory');
Route::get('/reduce/{id}', [

    'uses' => 'ProductController@getReduceByOne',
    'as' => 'shop.reduceByOne'
]);

Route::get('/delete/{id}', [

    'uses' => 'ProductController@removeItem',
    'as' => 'shop.removeItem'
]);


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'role'], function () {
    Route::get('/create', [
        'as' => 'role.create',
        'uses' => 'RoleController@create',
    ]);

    Route::post('/create', [
        'as' => 'role.store',
        'uses' => 'RoleController@store',
    ]);

    Route::get('role', [
        'as' => 'role.index',
        'uses' => 'RoleController@index'
    ]);
});

Auth::routes();

