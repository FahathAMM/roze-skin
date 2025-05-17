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

        // resources\views\site\shoppingcard\index.blade.php

        return view('site.shoppingcard.index', compact('cartItems', 'total'));
    }

    public function addToCart(Request $request, Product $product)
    {
        // return [
        //     $request->all(),
        //     $product
        // ];
        $this->repo->addToCart($product, $request->quantity ?? 1);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
