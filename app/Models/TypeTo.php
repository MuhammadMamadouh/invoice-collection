<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTo extends Model
{
    use HasFactory;
    public $fillable = [
        'to',
        'cc',
        'bcc',
    ];

    public function email()
    {
        return $this->belongsTo(Email::class, 'type_to');
    }
}
