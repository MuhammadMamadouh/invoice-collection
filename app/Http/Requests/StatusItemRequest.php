<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusItemRequest extends FormRequest
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
            'type_of_status'    => 'required|exists:types_of_status,id',
            'status'            => 'required|string|max:255',
            'follow_up_days'    => 'required|integer|min:1',
        ];
    }
}
