<?php

namespace App\Http\Resources;

use App\Models\PaymentType;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'price' => $this->price,
            'user' => $this->user,
            'products' => json_decode($this->products),
            'payment_type' => $this->paymentType,
            'delivery_method' => $this->deliveryMethod,
        ];
    }
}
