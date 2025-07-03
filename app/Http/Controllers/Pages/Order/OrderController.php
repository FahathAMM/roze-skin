<?php

namespace App\Http\Controllers\Pages\Order;

use App\Models\Order\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;
use App\Repositories\Orders\OrderRepo;

class OrderController extends Controller
{
    protected $modelName = 'Order';
    protected $routeName = 'order.index';
    protected $isDestroyingAllowed;
    protected $model;

    protected $repo;

    public function __construct(Order $model, OrderRepo $repo)
    {
        $this->model = $model;
        $this->isDestroyingAllowed = true;
        $this->repo = $repo;
    }

    public function index(Request $request)
    {
        // return  $orders = $this->repo->getAllOrdes($request)->get();

        $orders = $this->repo->getAllOrdes($request);
        $permissions =   $this->repo->getAccessPermission();


        if ($request->ajax()) {
            return Datatables::of($orders)->addIndexColumn()
                ->addColumn('action', function ($orders) use ($permissions) {
                    return actionBtns(
                        $orders->id,
                        'order.edit',
                        'admin/order',
                        '',
                        $permissions
                    );
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        logActivity('confirmed Order', 'confirmed Order', 'View');
        return view('pages/order/index', [
            'title' =>   'Order',
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

    public function show(Order $order)
    {
        $order =  $order->load('customer', 'OrderLog', 'items');

        // return $order;

        return view('pages.order.show', [
            'categories' => Category::get(['id', 'name', 'slug']),
            'title' =>   $this->modelName,
            'order' =>   $order,
        ]);
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
