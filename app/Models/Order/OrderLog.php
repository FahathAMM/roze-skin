<?php

namespace App\Models\Order;

use App\Models\User;
use App\Enums\OrderStatus;
use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderLog extends Model
{
    use HasFactory;

    protected $table = 'order_logs';

    public $orderStatus = [
        'pending',
        'paid',
        'shipped',
        'completed',
        'cancelled',
    ];

    protected $fillable = [
        'order_id',
        'status',
        'comment',
        'desc',
        'status_date',
    ];

    protected $casts = [
        'status' => OrderStatus::class,
        'status_date' => 'datetime',
    ];

    /**
     * Relationship: OrderLog belongs to Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
