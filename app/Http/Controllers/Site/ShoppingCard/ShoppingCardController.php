<?php

namespace App\Http\Controllers\Site\ShoppingCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCardController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::search($request)->get();

        // return $products;

        return view('site.product.products', [
            'products' => $products,
            'categories' => $products,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
