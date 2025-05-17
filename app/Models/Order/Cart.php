<?php

namespace App\Models\Order;

use App\Models\User;
use App\Models\Product\Product;
use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'product_variant_id',
        'quantity',
        'price',
        'session_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
