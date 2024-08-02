<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    use HasFactory;
    protected $table = 'item_types';
    protected $fillable = [
        'en_name',
    ];
}
