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
        return false;
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
            'legal_id' => "nullable|string|max:255",
            'vat_number' => "nullable|string|max:255",
            'business_line' => "nullable|string|max:255",
            'collector_id' => "required|numeric",
            'collection_scenario_id' => "required|numeric",
            'postal_code' => "nullable|string|max:255",
            'post_office_box' => "nullable|string|max:255",
            'city' => "nullable|string|max:255",
            'state' => "nullable|string|max:255",
            'country' => "nullable|string|max:255",
            'website' => "nullable|string|max:255",
            'payment_term' => "nullable|string|max:255",
            'payment_mean' => "nullable|string|max:255",
            'insurer_guarantee' => "nullable|numeric", 
            'other_guarantees' => "nullable|numeric",
            'credit_limit' => "nullable|numeric",
            'late_payment_penalties' => "nullable|boolean",
            'recovery_cost' => "nullable|boolean",
            'interactive_emails' => "nullable|boolean",
        ];
    }
}
