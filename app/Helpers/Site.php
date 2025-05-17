<?php

use App\Models\Category\Category;
use App\Models\Product\Product;

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
