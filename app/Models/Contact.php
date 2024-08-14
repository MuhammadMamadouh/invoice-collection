<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = ['title', 'first_name', 'last_name', 'email', 'copy_in_the_automatic_email',
    'phone', 'mobile_phone', 'fax', 'comments', 'contact_for_collection', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

}
