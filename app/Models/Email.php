<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    public $fillable = [
        'created_by',
        'resolver',
        'subject',
        'message',
        'get_a_copy',
        'request_an_acknowledgment',
        'email_type',
        'type_to',
        'emailable_id',
        'emailable_type',
    ];


    public function emailable()
    {
        return $this->morphTo();
    }
}
