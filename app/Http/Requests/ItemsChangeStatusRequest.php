<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemsChangeStatusRequest extends FormRequest
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
            'item_id' => 'required|',
            'status_id' => 'required|',
            'status_action_id' => 'required|',
            'resolver' => 'required|',
            'created_by' => 'required|',
            'comments' => 'required|string',
            'create_at' => 'required|date',
            // 'file' => 'required|',
            // 'visible_in' => 'required|boolean',
            // 'desc' => 'required|string',
        ];
    }
}
