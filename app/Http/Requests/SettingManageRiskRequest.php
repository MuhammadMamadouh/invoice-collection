<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingManageRiskRequest extends FormRequest
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
            'credit_insurance' => 'required|string|max:255',
            'credit_limits_validity_duration' => "required|numeric",
            'alert_when_the_total_receivable_reaches' => "required|numeric",
            'grace_period' => "required|numeric",
            'time_limit_for_declaring' => "required|numeric",
            'amount_of_discretionary_limit' => "required|numeric",
            'days_compared' =>  "required|in:due_date, issued_date",
        ];
    }
}
