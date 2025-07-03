<?php

namespace App\Repositories\Orders;

use App\Models\Order\Cart;
use App\Models\Order\Order;
use App\Models\Product\Product;
use App\Repositories\BaseRepository;

class OrderRepo extends BaseRepository
{
    protected $model;
    protected $loggedCustomerId;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function __call($method, $parameters)
    {
        $isExisit = $this->model->$method(...$parameters);

        if ($isExisit) {
            return $isExisit;
        }

        throw new \BadMethodCallException("Method {$method} does not exist on the model.");
    }

    public function getAllOrdes($request)
    {
        try {
            $model = $this->model->query();
            $model = $model->with('customer');
            $model =  $model->DateFilter($request);

            return $model;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function getOrdersByCustomer()
    {
        if (customerAuth()->check()) {
            return Order::where('customer_id', loggedCustomerId())->get();
        } else {
            return Order::where('session_id', session()->getId())->get();
        }
    }

    public function getAccessPermission(): array
    {
        return [
            'isView' => can('orders-pending-orders-view'),
            'isEdit' => false,
            'isDelete' =>  false,
            'isPrint' => false,
            'isTracking' => false
        ];
    }
}
