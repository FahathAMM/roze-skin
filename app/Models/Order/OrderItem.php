<?php

namespace App\Models\Order;

use App\Models\Product\Product;
use App\Models\Product\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'variant_id',
        'quantity',
        'price',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'price' => 'decimal:2',
    ];

    /**
     * Relationship: OrderItem belongs to an Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship: OrderItem belongs to a Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Relationship: OrderItem optionally belongs to a Product Variant
     */
    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
