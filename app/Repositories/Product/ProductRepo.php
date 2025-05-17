<?php

namespace App\Repositories\Product;

use App\Models\Asset\Asset;
use App\Models\Branch\Branch;
use App\Models\Product\Product;
use App\Models\Category\Category;
use Illuminate\Support\Facades\Log;
use App\Models\Product\ProductImage;
use App\Repositories\BaseRepository;

class ProductRepo extends BaseRepository
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
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

    public function createProduct($request)
    {
        $attrValues = $request->value;
        $attr =  $request->attribute;
        $attachedmentName =  $request->attachment_attribute;

        $videoNames = $request->video_name;
        $videoLinks =  $request->video_link;


        $created = $this->model->create($request->validated());

        if ($created) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('gallery', 'public');
                    ProductImage::create(['product_id' => $created->id, 'image' => $path]);
                }
            }

            foreach ($attrValues as $key => $valData) {
                $created->attributes()->create([
                    'key' => $attr[$key],
                    'value' => $valData,
                ]);
            }

            foreach ($videoNames as $key => $valData) {
                $created->videos()->create([
                    'file_name' => $videoLinks[$key],
                    'link' => $valData,
                    'path' => $valData,
                ]);
            }


            if ($request->hasFile('attachment_value')) {
                foreach ($request->file('attachment_value') as $key => $attachment) {
                    $path = $attachment->store('attachment', 'public');
                    Log::info($path);
                    $created->files()->create([
                        'file_name' => $attachedmentName[$key],
                        'desc' => $attachedmentName[$key],
                        'path' => $path,
                    ]);
                }
            }

            return $created;
        }
        return false;
    }

    public function updateProduct($request, $model)
    {
        $attrValues = $request->value;
        $attr =  $request->attribute;
        $attachedmentName =  $request->attachment_attribute;

        $videoNames = $request->video_name;
        $videoLinks =  $request->video_link;

        $variant_type = $request->variant_type;
        $variant_quantity =  $request->variant_quantity;
        $variant_original_price =  $request->variant_original_price;
        $variant_sale_price =  $request->variant_sale_price;

        $updated = $model->update($request->validated());

        if ($updated) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('gallery', 'public');
                    ProductImage::create(['product_id' => $model->id, 'image' => $path]);
                }
            }

            $model->variants()->delete();
            if ($request->has('variant_type')) {
                foreach ($variant_type as $key => $valData) {
                    $model->variants()->create([
                        'type' => $variant_type[$key],
                        'quantity' => $variant_quantity[$key],
                        'original_price' => $variant_original_price[$key],
                        'sale_price' => $variant_sale_price[$key],
                    ]);
                }
            }

            $model->attributes()->delete();
            if ($request->has('attribute')) {
                foreach ($attrValues as $key => $valData) {
                    // $model->attributes()->where('key', $attr[$key])->where('value', $valData)->delete();
                    $model->attributes()->create([
                        'key' => $attr[$key],
                        'value' => $valData,
                    ]);
                }
            }

            $model->videos()->delete();
            if ($request->has('video_name')) {
                foreach ($videoNames as $key => $valData) {
                    $model->videos()->create([
                        'file_name' => $valData,
                        'link' => $videoLinks[$key],
                        'path' => $videoLinks[$key],
                    ]);
                }
            }

            if ($request->hasFile('attachment_value')) {
                foreach ($request->file('attachment_value') as $key => $attachment) {
                    $originalExtension = $attachment->getClientOriginalExtension();
                    $fileSize = $attachment->getSize(); // in bytes
                    // $filename = time() . '_' . $key . '.' . $originalExtension;
                    $filename = $model->name . '.' . $originalExtension;

                    $path = $attachment->storeAs('attachment', $filename, 'public');

                    Log::info($path);

                    $model->files()->create([
                        'file_name' => $attachedmentName[$key],
                        'desc' => $attachedmentName[$key] ?? $filename,
                        'path' => $path,
                        'extension' => $originalExtension,
                        'size' => $fileSize,
                    ]);
                }
            }


            return $updated;
        }
        return false;
    }

    public function updateProductOld($request, $model)
    {
        $attrValues = $request->value;
        $attr =  $request->attribute;
        $attachedmentName =  $request->attachment_attribute;

        $videoNames = $request->video_name;
        $videoLinks =  $request->video_link;

        $updated = $model->update($request->validated());

        if ($updated) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('gallery', 'public');
                    ProductImage::create(['product_id' => $model->id, 'image' => $path]);
                }
            }

            $model->attributes()->delete();
            if ($request->has('attribute')) {
                foreach ($attrValues as $key => $valData) {
                    // $model->attributes()->where('key', $attr[$key])->where('value', $valData)->delete();
                    $model->attributes()->create([
                        'key' => $attr[$key],
                        'value' => $valData,
                    ]);
                }
            }

            if ($request->has('video_name')) {
                $model->videos()->delete();
                foreach ($videoNames as $key => $valData) {
                    $model->videos()->create([
                        'file_name' => $valData,
                        'link' => $videoLinks[$key],
                        'path' => $videoLinks[$key],
                    ]);
                }
            }

            if ($request->hasFile('attachment_value')) {
                foreach ($request->file('attachment_value') as $key => $attachment) {
                    $path = $attachment->store('attachment', 'public');
                    // Log::info($attachedmentName[$key]);
                    Log::info($path);
                    $model->files()->create([
                        'file_name' => $attachedmentName[$key],
                        'desc' => $attachedmentName[$key],
                        'path' => $path,
                    ]);
                }
            }
            return $updated;
        }
        return false;
    }

    public function updateCategory($request, $model)
    {
        $updated = $model->update($request->validated());
        if ($updated) {
            return $updated;
        }
        return false;
    }

    public function getAccessPermission(): array
    {
        return [
            'isView' => false,
            'isEdit' => true,
            'isDelete' =>  false,
            'isPrint' => false
        ];
    }
}
