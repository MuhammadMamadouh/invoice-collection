<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsMessage extends Model
{
    use HasFactory;
    public $fillable = [
        'created_by',
        'message',
        'automatic_action',
        'automatic_action_to_be_confirmed',
        'messageable_id',
        'messageable_type',
    ];
}
