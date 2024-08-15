<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemStatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type_of_status'    => $this->type_of_status,
            'status'            => $this->status,
            'follow_up_days'    => $this->follow_up_days,
        ];
    }
}
