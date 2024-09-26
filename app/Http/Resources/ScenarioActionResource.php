<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScenarioActionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id'                        => $this->id,
            // 'action_name'               => $this->action_name,
            // 'number_of_days'            => $this->number_of_days,
            // 'action_type'               =>  new ActionTypeResource($this->actionType),
            // 'collection_scenario_id'    => $this->collection_scenario_id,
        ];
    }
}
