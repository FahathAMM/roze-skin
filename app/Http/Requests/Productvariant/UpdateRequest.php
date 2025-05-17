<?php

namespace App\Http\Requests\Productvariant;

use App\Traits\failedValidationWithName;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    use failedValidationWithName;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => 'required|exists:products,id',
            'type' => 'required|string',
            'original_price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer',
            'discount_percentage' => 'nullable|numeric',
            'desc' => 'nullable|string',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'name.required' => 'The product name is required.',
    //         'slug.required' => 'The slug is required.',
    //         'slug.unique' => 'The slug must be unique.',
    //         'img.image' => 'The image must be a valid image file.',
    //         'is_active.boolean' => 'The is_active field must be true or false.',
    //     ];
    // }
}
