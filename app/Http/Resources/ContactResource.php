<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                           => $this->id,
            'title'                        => $this->title,
            'first_name'                   => $this->first_name,
            'last_name'                    => $this->last_name,
            'email'                        => $this->email,
            'copy_in_the_automatic_email'  => $this->copy_in_the_automatic_email,
            'phone'                        => $this->phone,
            'mobile_phone'                 => $this->mobile_phone,
            'fax'                          => $this->fax,
            'comments'                     => $this->comments,
            'contact_for_collection'       => $this->contact_for_collection,
            'client_id'                    => $this->client_id,
            'created_at'                   => $this->created_at,
            'updated_at'                   => $this->updated_at,

            'clientRole'                   => $this->clientRole ? ClientRoleResource::make($this->clientRole) : [],
        ];
    }
}
