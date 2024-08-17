<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'company_name' => "required|string|max:255",
            'company_code' => "required|string|max:255",
            'trading_name' => "nullable|string|max:255",
            'legal_id' => "nullable|string|max:255",
            'vat_number' => "nullable|string|max:255",
            'business_line' => "nullable|string|max:255",
            'ultimate_parent_code' => "nullable|string|max:255",
            // 'collector_id' => "required|exists:users,id",
            // 'collection_scenario_id' => "required|exists:collection_scenarios,id", // for now
            'address' => "nullable|string|max:255",
            'postal_code' => "nullable|string|max:255",
            'post_office_box' => "nullable|string|max:255",
            'city' => "nullable|string|max:255",
            'state' => "nullable|string|max:255",
            'country' => "nullable|string|max:255",
            'website' => "nullable|string|max:255",
            'payment_term' => "nullable|string|max:255",
            'payment_mean' => "nullable|string|max:255",
            'score' => "nullable|string|max:255",
            'start_date' => "nullable|date",
            'end_date' => "nullable|date",
            'insurer_reference' => "nullable|string|max:255",
            'insurer_guarantee' => "nullable|numeric",
            'other_guarantees' => "nullable|numeric",
            'temporary_guarantee' => "nullable|numeric",
            'credit_limit' => "nullable|numeric",
            'late_payment_penalties' => "nullable|boolean",
            'recovery_cost' => "nullable|boolean",
            'block_this_account' => "nullable|boolean",
            'interactive_emails' => "nullable|boolean",
            'customer_custom_field_1' => "nullable|string|max:255",
            'customer_custom_field_2' => "nullable|string|max:255",
        ];
    }
}
