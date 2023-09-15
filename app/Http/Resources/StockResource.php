<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        $result = [
            'quantity' => $this->quantity,
        ];

        $attributes = json_decode($this->attributes);
        foreach ($attributes as $item) {
            $attribute = Attribute::find($item->attribute_id);
            $value = Value::find($item->value_id);

            $result[$attribute->title] = $value->getTranslations('title');
        }

        return $result;
    }
}
