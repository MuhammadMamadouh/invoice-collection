<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TempActionsResource extends JsonResource
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
            'action_name' => $this->action_name,
            'action_date' => $this->action_date,
            'action_type' => $this->action_type,
            'collection_scenario_id' => $this->collection_scenario_id,
            'client_id' => $this->client_id,
            'item_id' => $this->item_id,
            'created_by' => $this->created_by,
            'item_change_status_id' => $this->item_change_status_id,
            'actionTypes' => new ActionTypeResource($this->actionTypes),
            'createdBy'  => new UserResource($this->createdBy),
        ];
    }
}
