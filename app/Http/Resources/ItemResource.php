<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $dueDate = Carbon::parse($this->due_date);
        $now = Carbon::now();
        $daysDifference = $dueDate->diffInDays($now);
        if ($dueDate->isFuture()) {
            $overDueDays = -$daysDifference;
        } else {
            $overDueDays = $daysDifference;
        }
        return [
            'item_type_id' => $this->item_type_id,
            'company_id' => $this->company_id,
            'po_no' => $this->po_no,
            'file_no' => $this->file_no,
            'erp_item_type' => $this->erp_item_type,
            'business_case' => $this->business_case,
            'sales_manager' => $this->sales_manager,
            'sales_administrative' => $this->sales_administrative,
            'customer_custom_field_1' => $this->customer_custom_field_1,
            'customer_custom_field_2' => $this->customer_custom_field_2,
            'order_date' => $this->order_date,
            'issue_date' => $this->issue_date,
            'due_date' => $this->due_date,
            'payment_date' => $this->payment_date,
            'currency_id' => $this->currency_id,
            'initial_amount_exc_tax' => $this->initial_amount_exc_tax,
            'initial_amount_inc_tax' => $this->initial_amount_inc_tax,
            'remaining_amount_exc_tax' => $this->remaining_amount_exc_tax,
            'remaining_amount_inc_tax' => $this->remaining_amount_inc_tax,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'over_due' => $overDueDays,
        ];
    }
}
