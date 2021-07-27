<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginSecurityController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
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


Route::group(['prefix'=>'2fa'], function(){
    Route::get('/',[LoginSecurityController::class, 'show2faForm']);
    Route::post('/generateSecret',[LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa',[LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa',[LoginSecurityController::class, 'disable2fa'])->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});

// test middleware
Route::get('/test_middleware', function () {
    return "2FA middleware work!";
})->middleware(['auth', '2fa']);


Route::view('/', 'home');
Route::get('/', [HomeController::class, 'index']);


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
Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
Route::post('/shopping-cart/products', [OrderController::class, 'checkout'])->name('shop.checkout');
Route::post('/placeOrder', [OrderController::class, 'placeOrder'])->name('shop.placeOrder');
Route::get('/orders/{order}',[OrderController::class, 'showOrder'])->name('shop.order');
Route::post('/orders/{order}/update', [OrderController::class, 'orderUpdate'])->name('shop.order');
Route::get('/orders', [OrderController::class, 'index'])->name('shop.index');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/reduce/{id}', [ProductController::class, 'getReduceByOne'])->name('shop.reduceByOne');
Route::get('/delete/{id}', [ProductController::class, 'removeItem'])->name('shop.removeItem');
Route::get('change-password', [ChangePasswordController::class, 'index']);
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');
Route::get('/load-latest-messages', [MessagesController::class, 'getLoadLatestMessages']);
Route::post('/send', [MessagesController::class, 'postSendMessage']);
Route::get('/fetch-old-messages', [MessagesController::class, 'getOldMessages']);



Route::get('/statistics', 'OrderController@chart')->name('shop.statistics');
Route::get('/customer/print-pdf/{order}', 'UserController@printPDF')->name('customer.printpdf');
Route::get('/orderHistory','OrderController@orderHistory')->name('shop.orderHistory');


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

