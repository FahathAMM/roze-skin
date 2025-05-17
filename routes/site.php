<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\Home\HomeController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Site\Product\ProductController;
use App\Http\Controllers\Site\Solution\SolutionController;
use App\Http\Controllers\Site\Organization\AboutUsController;
use App\Http\Controllers\Site\Organization\ContactController;
use App\Http\Controllers\Site\Organization\DownloadController;


// Route::get('/', function () {
//     return view('site.test');
// });

Route::resource('/', HomeController::class);
Route::resource('product', ProductController::class);
Route::resource('contact', ContactController::class);
Route::resource('aboutus', AboutUsController::class);
Route::resource('download', DownloadController::class);
Route::resource('solutions', SolutionController::class);

Route::get('product-by-category/{category}', [ProductController::class, 'productByCategory']);




Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerLoginController::class, 'login']);
Route::post('/customer/logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');

Route::middleware('customer')->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});
