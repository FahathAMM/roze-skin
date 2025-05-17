<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type',
        'original_price',
        'sale_price',
        'price',
        'quantity',
        'discount_percentage',
        'desc',
    ];

    /**
     * Relationship: Each variant belongs to a product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Accessor to get the final price considering sale price
     */
    public function getFinalPriceAttribute()
    {
        return $this->sale_price ?? $this->price;
    }
}
