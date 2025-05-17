<?php

namespace App\Models\Product;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Category\Category;
use App\Models\Product\ProductImage;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product\ProductAttachment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $with = ['mainImage'];

    protected $fillable = [
        'name',
        'description',
        'sku',
        'brand_id',
        'category_id',
        'status',
        'main_image',
        'meta_title',
        'meta_description',
        'slug',
        'warranty',
        'features',
        'specifications',
        'short_desc',
        'tags',
        'weight',
        'dimensions',
        'condition',
        'file_category',
        'is_available',
        'is_warrenty_available',
        'view_count',
        'display_disc',

        'quantity',
        'simple_original_price',
        'simple_sale_price',
        'simple_price',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function videos()
    {
        return $this->hasMany(ProductVideo::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function mainImage()
    {
        return $this->hasOne(ProductImage::class);
    }

    public function gallery()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function files()
    {
        return $this->hasMany(ProductAttachment::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch($query, $request)
    {
        return $query->when($request->filled('q'), function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->q . '%');
        });
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
        $this->attributes['sku'] = 'SKU-' . ucwords(Str::slug($value));
    }
}
