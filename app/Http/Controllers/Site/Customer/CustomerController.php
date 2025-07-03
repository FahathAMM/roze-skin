<?php

namespace App\Http\Controllers\Site\Customer;

use App\Enums\OrderStatus;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Orders\OrderRepo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CustomerController extends Controller
{
    protected $modelName = 'Cart';
    protected $routeName = 'cart.index';
    protected $isDestroyingAllowed;
    protected $model;

    protected $repo;

    public function __construct(Order $model, OrderRepo $repo)
    {
        $this->model = $model;
        $this->isDestroyingAllowed = true;
        $this->repo = $repo;
    }

    public function index()
    {
        try {

            $customer = loggedCustomer();
            $orders = $this->repo->getOrdersByCustomer();
            return view('site.customer.index', compact('customer', 'orders'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Request $request, Order $order)
    {
        try {
            $order = $order->load('customer', 'OrderLog', 'items.product');
            $customer = loggedCustomer();

            // return $order;

            return view('site.customer.show', compact('customer', 'order'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateCart(Request $request, $productId)
    {
        $this->repo->updateCart($productId, $request->quantity);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    public function removeFromCart($productId)
    {
        $this->repo->removeFromCart($productId);

        return  $this->response('Product removed from cart successfully', null, true);

        // return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully!');
    }

    public function clearCart()
    {
        $this->repo->clearCart();

        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully!');
    }
}
