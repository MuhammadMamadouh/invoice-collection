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
            'item_type' => 'required|exists:item_types,id',
            'Company_code' => 'required|string|max:255',
            'PO_NO' => 'required|string|max:255',
            'File_NO' => 'required|string|max:255',
            'ERP_item_type' => 'required|string|max:255',
            'Business_case' => 'required|string|max:255',
            'Sales_manager' => 'required|string|max:255',
            'Sales_administrative' => 'required|string|max:255',
            'Customer_custom_field_1' => 'nullable|string|max:255',
            'Customer_custom_field_2' => 'nullable|string|max:255',
            'Order_date' => 'required|date',
            'Issue_date' => 'required|date',
            'Due_date' => 'required|date',
            'Payment_date' => 'nullable|date',
            'Currency' => 'required|string|max:255|exists:currencies,id',
            'Initial_amount_exc_Tax' => 'required|numeric',
            'Initial_amount_inc_Tax' => 'required|numeric',
            'Remaining_amount_exc_Tax' => 'required|numeric',
            'Remaining_amount_inc_Tax' => 'required|numeric',
        ];
    }
}
