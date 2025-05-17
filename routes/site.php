<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Site\Product\ProductController;
use App\Http\Controllers\Site\Organization\AboutUsController;
use App\Http\Controllers\Site\Organization\ContactController;
use App\Http\Controllers\Site\Organization\DownloadController;
use App\Http\Controllers\Site\ShoppingCard\ShoppingCardController;

// Route::get('/', function () {
//     return view('site.test');
// });

Route::resource('/', HomeController::class);
Route::resource('product', ProductController::class);
Route::resource('contact', ContactController::class);
Route::resource('aboutus', AboutUsController::class);
Route::resource('download', DownloadController::class);


Route::resource('shopping/card', ShoppingCardController::class);
Route::post('shopping/cart/add/{product}', [ShoppingCardController::class, 'addToCart'])->name('cart.add');


// Route::group(['middleware' => ['web']], function () {
//     // Cart routes
//     Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
//     Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
//     Route::post('/cart/update/{productId}', [CartController::class, 'updateCart'])->name('cart.update');
//     Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
//     Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
// });


Route::get('product-by-category/{category}', [ProductController::class, 'productByCategory']);


Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::get('/customer/register', [CustomerLoginController::class, 'showRegisterForm'])->name('customer.register');
Route::post('/customer/register-store', [CustomerLoginController::class, 'register']);
Route::post('/customer/login', [CustomerLoginController::class, 'login']);
Route::get('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');

Route::middleware('customer')->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});
