<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Collection;


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
            'id'                        => $this->id,
            'company_name'              => $this->company_name,
            'company_code'              => $this->company_code,
            'trading_name'              => $this->trading_name,
            'legal_id'                  => $this->legal_id,
            'vat_number'                => $this->vat_number,
            'business_line'             => $this->business_line,
            'collector_id'              => $this->collector_id,
            'collection_scenario_id'    => $this->collection_scenario_id,
            'address'                   => $this->address,
            'postal_code'               => $this->postal_code,
            'post_office_box'           => $this->post_office_box,
            'city'                      => $this->city,
            'state'                     => $this->state,
            'country'                   => $this->country,
            'website'                   => $this->website,
            'payment_term'              => $this->payment_term,
            'payment_mean'              => $this->payment_mean,
            'insurer_guarantee'         => $this->insurer_guarantee,
            'other_guarantees'          => $this->other_guarantees,
            'credit_limit'              => $this->credit_limit,
            'late_payment_penalties'    => $this->late_payment_penalties,
            'recovery_cost'             => $this->recovery_cost,
            'interactive_emails'        => $this->interactive_emails,
            'customer_custom_field_1'   => $this->customer_custom_field_1,
            'customer_custom_field_2'   => $this->customer_custom_field_2,
            'items'                     => ItemResource::collection($this->items),
            'collectionScenarios'       => $this->collectionScenarios ? CollectionScenarioResource::make($this->collectionScenarios) : [],
            'collector'                 => new UserResource($this->collector),
            'clientGroup'               => ClientGroupResource::collection($this->clientsGroups)->toArray($request) ?? [],
            'firstDueItem'              => $this->firstDueItem ? ItemResource::make($this->firstDueItem()->first()) : [],
        ];
    }
}
