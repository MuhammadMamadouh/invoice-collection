<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRole extends Model
{
    use HasFactory;

    public $fillable = [
        'accountant',
        'client',
        'company',
        'executive_Officer',
        'other',
    ];

}
