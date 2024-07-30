<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'phone' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'function' => 'nullable|string|max:255',
            'id_number' => 'nullable|string|max:255',
            'role' => 'required|string|max:255',
            'active' => 'required|boolean',

        ];
    }
}
