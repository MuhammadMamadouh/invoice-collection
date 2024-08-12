<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'item_type_id'              => 'required|exists:item_types,id',
            'company_id'                => 'required|integer|exists:clients,id',
            'status_id'                 => 'required|integer|exists:status_of_items,id',
            'po_no'                     => 'required|string|max:255',
            'trans_no'                  => 'required|string|max:255',
            'file_no'                   => 'required|string|max:255',
            'erp_item_type'             => 'required|string|max:255',
            'business_case'             => 'required|string|max:255',
            'sales_manager'             => 'required|string|max:255',
            'sales_administrative'      => 'required|string|max:255',
            'customer_custom_field_1'   => 'nullable|string|max:255',
            'customer_custom_field_2'   => 'nullable|string|max:255',
            'order_date'                => 'required|date',
            'issue_date'                => 'required|date',
            'due_date'                  => 'required|date',
            'payment_date'              => 'nullable|date',
            'currency_id'               => 'required|integer|exists:currencies,id',
            'initial_amount_exc_tax'    => 'required|numeric',
            'initial_amount_inc_tax'    => 'required|numeric',
            'remaining_amount_exc_tax'  => 'required|numeric',
            'remaining_amount_inc_tax'  => 'required|numeric',
        ];
    }
}
