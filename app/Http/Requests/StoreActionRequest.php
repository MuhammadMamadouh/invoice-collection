<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActionRequest extends FormRequest
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
            'en_name'        => 'required|string|max:255',
            'number_of_days' => 'required|numeric|max:365',
            'action_type_id'  => 'required|exists:action_types,id',
        ];
    }

    public function messages()
    {
        return [
            'en_name.required' => 'Please enter action name',
            'number_of_days.required' => 'Please enter no. of days',
            'action_type_id.required' => 'please enter action type',
        ];
    }
}
