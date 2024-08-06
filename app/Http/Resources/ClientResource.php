<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'company_name' => $this->company_name,
            'trading_name' => $this->trading_name,
            'legal_id' => $this->legal_id,
            'vat_number' => $this->vat_number,
            'business_line' => $this->business_line,
            'collector_id' => $this->collector_id,
            'collection_scenario_id' => $this->collection_scenario_id,
            'address' => $this->address,
            'postal_code' => $this->postal_code,
            'post_office_box' => $this->post_office_box,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'website' => $this->website,
            'payment_term' => $this->payment_term,
            'payment_mean' => $this->payment_mean,
            'insurer_guarantee' => $this->insurer_guarantee,
            'other_guarantees' => $this->other_guarantees,
            'credit_limit' => $this->credit_limit,
            'late_payment_penalties' => $this->late_payment_penalties,
            'recovery_cost' => $this->recovery_cost,
            'interactive_emails' => $this->interactive_emails,
            'customer_custom_field_1' => $this->customer_custom_field_1,
            'customer_custom_field_2' => $this->customer_custom_field_2,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'items' => ItemResource::collection($this->items),
            'collectionScenarios' => CollectionScenarioResource::collection($this->collectionScenarios),
            'collector' => new UserResource($this->collector),
        ];
    }
}
