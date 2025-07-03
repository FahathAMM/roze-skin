<?php

namespace App\Models\Order;

use App\Models\User;
use App\Models\Customer\Customer;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    // Fields that can be mass assigned
    protected $fillable = [
        'customer_id',
        'order_number',
        'total_price',
        'status',
        'address',
        'item_count',
        'payment_status',
        'payment_method',
    ];

    // Cast fields to appropriate data types
    protected $casts = [
        'total_price' => 'decimal:2',
        'payment_status' => 'boolean',
        'item_count' => 'integer',
    ];



    public static function generateOrderNumber()
    {
        $prefix = 'ORD-' . date('Ymd') . '-';
        $lastOrder = Order::where('order_number', 'like', $prefix . '%')->orderBy('order_number', 'desc')->first();

        if ($lastOrder) {
            $number = (int) str_replace($prefix, '', $lastOrder->order_number) + 1;
        } else {
            $number = 1;
        }

        return $prefix . str_pad($number, 5, '0', STR_PAD_LEFT);
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class)->with('product');
    }

    public function OrderLog()
    {
        return $this->hasMany(OrderLog::class)->orderBy('status_date', 'desc');
    }

    public function getCreatedAtAttribute($value)
    {
        // Format it as needed after casting
        return \Carbon\Carbon::parse($value)->timezone('Asia/Dubai')->format('Y-m-d H:i:s');

        // return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function scopeDateFilter($query, $request)
    {
        return $query->when($request->filled('minDate') && $request->filled('maxDate'), function ($query) use ($request) {

            $start_date = date("Y-m-d 00:00:00", strtotime(trim($request->minDate))); // Start of the day
            $end_date = date("Y-m-d 23:59:59", strtotime(trim($request->maxDate)));   // End of the day

            $query->whereBetween('created_at', [$start_date, $end_date]);
        });
    }
}
