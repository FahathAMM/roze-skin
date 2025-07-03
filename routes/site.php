<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Site\Customer\CustomerController;
use App\Http\Controllers\Site\Product\ProductController;
use App\Http\Controllers\Site\Shopping\CheckoutController;
use App\Http\Controllers\Site\Organization\AboutUsController;
use App\Http\Controllers\Site\Organization\ContactController;
use App\Http\Controllers\Site\Organization\DownloadController;
use App\Http\Controllers\Site\Shopping\ShoppingCardController;

// Route::get('/', function () {
//     return view('site.test');
// });

Route::resource('/', HomeController::class);
Route::resource('product', ProductController::class);
Route::resource('contact', ContactController::class);
Route::resource('aboutus', AboutUsController::class);
Route::resource('download', DownloadController::class);


// Route::resource('shopping/card', ShoppingCardController::class);
// Route::post('shopping/cart/add/{product}', [ShoppingCardController::class, 'addToCart'])->name('cart.add');

Route::get('product-by-category/{category}', [ProductController::class, 'productByCategory']);

Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::get('/customer/register', [CustomerLoginController::class, 'showRegisterForm'])->name('customer.register');
Route::post('/customer/register-store', [CustomerLoginController::class, 'register']);
Route::post('/customer/login', [CustomerLoginController::class, 'login']);
Route::get('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');


Route::post('shopping/cart/add/{product}', [ShoppingCardController::class, 'addToCart'])->name('cart.add');
Route::delete('shopping/cart/remove/{productId}', [ShoppingCardController::class, 'removeFromCart'])->name('cart.remove');


// Checkout routes
Route::get('shopping/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('shopping/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('shopping/checkout/success/{orderNumber}', [CheckoutController::class, 'success'])->name('checkout.success');

Route::middleware('customer')->group(function () {

    // Route::get('/customer/dashboard', function () {
    //     return view('customer.dashboard');
    // })->name('customer.dashboard');

    Route::resource('shopping/card', ShoppingCardController::class);
    Route::get('customer/account/{page}', [CustomerController::class, 'index']);
    Route::get('customer/orders/{order}', [CustomerController::class, 'show'])->name('customer.order');
});
