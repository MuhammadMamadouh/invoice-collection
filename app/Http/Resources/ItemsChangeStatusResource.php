<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemsChangeStatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'item_id' => $this->item_id,
            'status_id' => $this->status_id,
            'status_action_id' => $this->status_action_id,
            'resolver' => $this->resolver,
            'created_by' => $this->created_by,
            'comments' => $this->comments,
            'create_at' => $this->create_at,
            'statusResolver' => $this->statusResolver,
            'statusFiles' => $this->statusFiles ? FilesResource::collection($this->files) : [],
        ];
    }
}
