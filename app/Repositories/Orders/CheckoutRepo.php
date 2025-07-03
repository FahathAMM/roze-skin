<?php

namespace App\Repositories\Orders;

use App\Enums\OrderStatus;
use App\Models\Order\Cart;
use App\Models\Order\Order;
use App\Models\Order\OrderLog;
use App\Models\Order\OrderItem;
use App\Models\Product\Product;
use App\Models\Customer\Customer;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class CheckoutRepo extends BaseRepository
{
    protected $model;
    protected $loggedCustomerId;
    protected $cartRepo;

    public function __construct(Cart $model, CartRepo $repo)
    {
        $this->model = $model;
        $this->cartRepo = $repo;
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

    public function createOrder(array $data)
    {
        return DB::transaction(function () use ($data) {
            $cartItems = $this->cartRepo->getCart();
            $total = $this->cartRepo->getCartTotal();

            if (count($cartItems) > 0) {
                $order = Order::create([
                    'customer_id' => loggedCustomerId(),
                    'order_number' => Order::generateOrderNumber(),
                    'status' => 'pending',
                    'total_price' => $total,
                    'item_count' => $cartItems->count(),
                    'payment_status' => false,
                    'payment_method' => $data['payment_method'],

                    'description' => $data['description'] ?? null,
                ]);

                if ($order) {
                    Customer::updateOrCreate(
                        ['id' => loggedCustomerId()],
                        [
                            'first_name' => $data['first_name'],
                            'last_name' => $data['last_name'],
                            'name' => $data['first_name'],
                            'email' => $data['email'],
                            'mobile' => $data['mobile'],
                            'address' => $data['address'],
                            'city' => $data['city'],
                            'country' => $data['country'],
                            'postal_code' => $data['postal_code'] ?? null,
                            'description' => $data['description'] ?? null,
                        ]
                    );

                    foreach ($cartItems as $item) {
                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $item->product_id,
                            'quantity' => $item->quantity,
                            'price' => $item->price,
                        ]);

                        // Update product stock
                        $product = Product::find($item->product_id);
                        $product->quantity -= $item->quantity;
                        $product->save();
                    }

                    // OrderLog
                    OrderLog::updateOrCreate(
                        ['order_id' => $order->id, 'status' => ''],
                        ['order_id' => $order->id, 'status' => OrderStatus::Pending->value, 'status_date' => now()]
                    );

                    $this->cartRepo->clearCart();
                }

                return true;
            }

            return false;
        });
    }
}
