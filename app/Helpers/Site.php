<?php

use App\Models\Product\Product;
use App\Models\Category\Category;
use Illuminate\Support\Facades\Auth;

if (!function_exists('getCategories')) {
    function getCategories()
    {

        return Category::with('subcategories')->get();
    }
}

if (!function_exists('getProductsForCardModel')) {
    function getProductsForCardModel()
    {
        return Product::get();
    }
}

if (!function_exists('customerAuth')) {
    function customerAuth()
    {
        return Auth::guard('customer');
    }
}

if (!function_exists('loggedCustomer')) {
    function loggedCustomer()
    {
        if (Auth::guard('customer')->check()) {
            return Auth::guard('customer')->user();
        } else {
            return 'customer not logged';
        }
    }
}

if (!function_exists('loggedCustomerId')) {
    function loggedCustomerId()
    {
        if (Auth::guard('customer')->check()) {
            return Auth::guard('customer')->user()->id;
        } else {
            return 'customer not logged';
        }
    }
}
