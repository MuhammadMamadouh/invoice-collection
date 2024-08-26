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
            'email_type' => $this->email_type,
            'type_to' => $this->type_to,
            'subject' => $this->subject,
            'message' => $this->message,
            'get_a_copy' => $this->get_a_copy,
            'request_an_acknowledgment' => $this->request_an_acknowledgment,
            'statusResolver' => $this->statusResolver,
            'statusFiles' => $this->statusFiles ? ItemsChangeStatusFilesResource::collection($this->statusFiles) : [],
            'readableFileSize' => $this->readableFileSize ? ItemsChangeStatusFilesResource::make($this->getReadableFileSizeAttribute()) : [],
        ];
    }
}
