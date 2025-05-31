<?php

namespace App\Http\Controllers\Site\ShoppingCard;

use App\Models\Order\Cart;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Orders\CartRepo;

class ShoppingCardController extends Controller
{
    protected $modelName = 'Cart';
    protected $routeName = 'cart.index';
    protected $isDestroyingAllowed;
    protected $model;

    protected $repo;

    public function __construct(Cart $model, CartRepo $repo)
    {
        $this->model = $model;
        $this->isDestroyingAllowed = true;
        $this->repo = $repo;
    }

    public function index()
    {
        $cartItems = $this->repo->getCart();
        $total = $this->repo->getCartTotal();

        // return [
        //     $cartItems,
        //     $total
        // ];

        return view('site.shoppingcard.index', compact('cartItems', 'total'));
    }

    public function addToCart(Request $request, Product $product)
    {
        if (!customerAuth()->check()) {
            return  $this->response('customer need to be login for add to cart', ['status' => '2'], false);
        }
        $response = $this->repo->addToCart($product, $request->productQty ?? 1);

        return  $this->response('The product has been added to your cart', null, true);
    }

    public function updateCart(Request $request, $productId)
    {
        $this->repo->updateCart($productId, $request->quantity);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    public function removeFromCart($productId)
    {
        $this->repo->removeFromCart($productId);

        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
    }

    public function clearCart()
    {
        $this->repo->clearCart();

        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully!');
    }
}
