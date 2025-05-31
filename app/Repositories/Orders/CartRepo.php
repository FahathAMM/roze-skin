<?php

namespace App\Repositories\Orders;

use App\Models\Order\Cart;
use App\Models\Product\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;

class CartRepo extends BaseRepository
{
    protected $model;
    protected $loggedCustomerId;

    public function __construct(Cart $model)
    {
        // dd(loggedCustomer());
        $this->model = $model;
    }

    public function __call($method, $parameters)
    {
        // Forward calls to the model instance
        $isExisit = $this->model->$method(...$parameters);

        if ($isExisit) {
            return $isExisit;
        }

        throw new \BadMethodCallException("Method {$method} does not exist on the model.");
    }

    public function getCart()
    {
        if (customerAuth()->check()) {
            return Cart::where('customer_id', loggedCustomerId())->with('product')->get();
        } else {
            return Cart::where('session_id', session()->getId())->with('product')->get();
        }
    }

    public function addToCart(Product $product, $quantity = 1)
    {
        $cartItem = $this->getExistingCartItem($product);

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        } else {
            $cartItem = Cart::create([
                'customer_id' => customerAuth()->check() ? loggedCustomerId() : null,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->simple_sale_price,
                'session_id' => session()->getId()
            ]);
        }
        return $cartItem;
    }

    public function updateCart($productId, $quantity)
    {
        $cartItem = $this->getCartItemById($productId);

        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }
    }

    public function removeFromCart($productId)
    {
        $cartItem = $this->getCartItemById($productId);

        if ($cartItem) {
            $cartItem->delete();
        }
    }

    public function clearCart()
    {
        if (customerAuth()->check()) {
            Cart::where('customer_id', loggedCustomerId())->delete();
        } else {
            Cart::where('session_id', session()->getId())->delete();
        }
    }

    public function getCartTotal()
    {
        $cartItems = $this->getCart();
        return $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }

    public function getCartCount()
    {
        $cartItems = $this->getCart();
        return $cartItems->sum('quantity');
    }

    protected function getExistingCartItem(Product $product)
    {
        if (customerAuth()->check()) {
            return Cart::where('customer_id', loggedCustomerId())
                ->where('product_id', $product->id)
                ->first();
        } else {
            return Cart::where('session_id', session()->getId())
                ->where('product_id', $product->id)
                ->first();
        }
    }

    protected function getCartItemById($productId)
    {
        if (customerAuth()->check()) {
            return Cart::where('customer_id', loggedCustomerId())
                ->where('product_id', $productId)
                ->first();
        } else {
            return Cart::where('session_id', session()->getId())
                ->where('product_id', $productId)
                ->first();
        }
    }

    public function mergeSessionCartWithUserCart()
    {
        if (customerAuth()->check() && session()->has('cart')) {
            $sessionCart = Cart::where('session_id', session()->getId())->get();

            foreach ($sessionCart as $item) {
                $existingCartItem = Cart::where('customer_id', loggedCustomerId())
                    ->where('product_id', $item->product_id)
                    ->first();

                if ($existingCartItem) {
                    $existingCartItem->quantity += $item->quantity;
                    $existingCartItem->save();
                    $item->delete();
                } else {
                    $item->user_id = loggedCustomerId();
                    $item->session_id = null;
                    $item->save();
                }
            }
        }
    }
}
