<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ItemResource;
use Illuminate\Support\Collection;
use League\CommonMark\Node\Inline\Newline;

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
            'ultimate_parent_code'      => $this->ultimate_parent_code,
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
            'score'                     => $this->score,
            'start_date'                => $this->start_date,
            'end_date'                  => $this->end_date,
            'insurer_reference'         => $this->insurer_reference,
            'insurer_guarantee'         => $this->insurer_guarantee,
            'other_guarantees'          => $this->other_guarantees,
            'temporary_guarantee'       => $this->temporary_guarantee,
            'credit_limit'              => $this->credit_limit,
            'late_payment_penalties'    => $this->late_payment_penalties,
            'recovery_cost'             => $this->recovery_cost,
            'interactive_emails'        => $this->interactive_emails,
            'block_this_account'        => $this->block_this_account,
            'customer_custom_field_1'   => $this->customer_custom_field_1,
            'customer_custom_field_2'   => $this->customer_custom_field_2,
            'items'                     => ItemResource::collection($this->items()->paginate(10)),
            'items_count'               => $this->items()->count(),
            'total_recievables'         => $this->items()->sum('initial_amount_inc_tax'),
            'total_overdue_60'          => $this->overDueItemsMoreThanTwoMonths()->sum('initial_amount_inc_tax'),
            'total_overdue'             => $this->overDueItems()->sum('initial_amount_inc_tax'),
            'collectionScenario'        => CollectionScenarioResource::make($this->collectionScenario),
            'collector'                 => new UserResource($this->collector),
            'clientGroup'               => ClientGroupResource::collection($this->clientsGroups)->toArray($request) ?? [],
            'firstDueItem'              => $this->firstDueItem ? ItemResource::make($this->firstDueItem()->first()) : [],
            'contacts'                  => ContactResource::collection($this->contacts),
            'toTakeAction'              => $this->actions()->first(),
        ];
    }
}
