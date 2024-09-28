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
        'subject',
        'messageable_id',
        'messageable_type',
    ];

    public function messageable()
    {
        return $this->morphTo();
    }
}
