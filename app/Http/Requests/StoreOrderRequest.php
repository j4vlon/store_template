<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|int',
            'delivery_method_id' => 'required|int',
            'payment_type_id' => 'required|int',
            'comment' => 'nullable|string|max:500',
            'price' => 'required|numeric',
            'user_address_id' => 'required|int',
            'products' => 'required|array',
            'products.*.product_id' => 'required|int',
            'products.*.stock_id' => 'nullable|int',
            'products.*.quantity' => 'required|int',
        ];
    }
}
