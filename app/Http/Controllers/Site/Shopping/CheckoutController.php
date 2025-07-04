<?php

namespace App\Http\Controllers\Site\Shopping;

use App\Models\Order\Cart;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Orders\CartRepo;
use App\Repositories\Orders\CheckoutRepo;
use App\Http\Requests\Checkout\StoreRequest;

class CheckoutController extends Controller
{
    protected $repo;
    protected $cartService;
    protected $cartRepo;
    protected $modelName = 'Cart';
    protected $routeName = 'cart.index';

    public function __construct(CheckoutRepo $repo, CartRepo $cartRepo)
    {
        $this->repo = $repo;
        $this->cartRepo = $cartRepo;
    }

    public function index()
    {
        $cartItems = $this->cartRepo->getCart();
        $customer = loggedCustomer();

        if ($cartItems->isEmpty()) {
            // return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $total = $this->cartRepo->getCartTotal();

        return view('site.checkout.index', compact('cartItems', 'total', 'customer'));
    }

    public function store(StoreRequest $request)
    {
        try {
            $order = $this->repo->createOrder($request->validated());

            // if (false) {
            //     // if ($request->payment_method == 'stripe') {
            //     Stripe::setApiKey(config('services.stripe.secret'));
            //     $charge = Charge::create([
            //         'amount' => $order->grand_total * 100,
            //         'currency' => 'usd',
            //         'source' => $request->stripeToken,
            //         'description' => 'Order #' . $order->order_number,
            //     ]);

            //     $order->update([
            //         'payment_status' => true,
            //         'status' => 'processing'
            //     ]);
            // }
            return  $this->response($this->modelName . ' created successfully', ['data' => $order], true);

            // return redirect()->route('checkout.success', $order->order_number)->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {

            return $e->getMessage();

            return back()->with('error', 'Error processing order: ' . $e->getMessage());
        }
    }

    public function success($orderNumber)
    {
        $order = Order::where('order_number', $orderNumber)->firstOrFail();
        return view('checkout.success', compact('order'));
    }
}
