<?php

namespace App\Http\Resources;

use App\Models\ItemsChangeStatusFiles;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemsChangeStatusFilesResource extends JsonResource
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
            'visiable_in' => $this->visiable_in,
            'item_id' => $this->item_id,
            'items_change_status_id' => $this->items_change_status_id,
        ];
    }
}
