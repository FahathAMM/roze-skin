<?php

namespace App\Http\Requests\Checkout;

use App\Traits\failedValidationWithName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
{
    use failedValidationWithName;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name'      => 'required|string|max:255',
            'last_name'       => 'nullable|string|max:255',
            'email'           => 'nullable|email|max:255', // Changed to validate proper email format
            'city'            => 'required|string|max:255',
            'postal_code'     => 'nullable|string|max:20', // Optional: consider postal code max length
            'mobile'          => 'required|string|max:20', // Optional: adjust max length to fit mobile formats
            'country'         => 'nullable|string|max:100',
            'description'     => 'nullable|string|max:100',
            // 'customer_id'     => 'required|exists:customers,id',
            'address'         => 'required|string|max:255',

            //order
            // 'order_number'    => 'required|string|max:100|unique:orders,order_number', // Added max for consistency
            // 'total_price'     => 'required|numeric|min:0',
            // 'item_count'      => 'required|integer|min:1',
            // 'payment_status'  => 'nullable|string|in:paid,unpaid,refunded',
            // 'status'          => 'required|string|in:pending,processing,shipped,delivered,cancelled',

            'payment_method'  => 'nullable|string',
            'card_number'       => 'nullable|string',
            'expiration_date' => 'nullable|string',
            'cvv'             => 'nullable|string',
        ];
    }
}
