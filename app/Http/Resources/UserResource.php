<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'active' => $this->active,
            'email' => $this->email,
            'password' => $this->password,
            // 'phone' => $this->phone,
            // 'mobile_phone' => $this->mobile_phone,
            // 'function' => $this->function,
            // 'role_id' => $this->role_id,
            // 'picture' => $this->picture,
            // 'fax' => $this->fax,
            // 'id_number' => $this->id_number,
            // 'email_verified_at' => $this->email_verified_at,
            // 'is_super_admin' => $this->is_super_admin,
            // 'rememberToken' => $this->rememberToken,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
