<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilesResource extends JsonResource
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
            'file_name' => $this->file_name,
            'file_size' => $this->readableFileSize,
            'desc' => $this->desc,
            'visiable_in_internal' => $this->visiable_in_internal,
            'visiable_in_external' => $this->visiable_in_external,
            'item_id' => $this->item_id,
            'items_change_status_id' => $this->items_change_status_id,
        ];
    }
}