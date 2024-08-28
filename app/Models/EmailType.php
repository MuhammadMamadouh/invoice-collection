<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailType extends Model
{
    use HasFactory;

    public $fillable = [
        'simple_email',
        'internal_interactive_email',
    ];
}
