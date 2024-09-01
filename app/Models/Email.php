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
        'automatic_action', 
        'automatic_action_to_be_confirmed', 
        'internal_interactive_emailLink',
        'emailable_id',
        'emailable_type',
    ];


    public function emailable()
    {
        return $this->morphTo();
    }

    public function emailTypes()
    {
        return $this->hasMany(EmailType::class, 'email_type');
    }

    public function emailTypeTos()
    {
        return $this->hasMany(TypeTo::class, 'type_to');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function resolver()
    {
        return $this->belongsTo(User::class, 'resolver');
    }
}
