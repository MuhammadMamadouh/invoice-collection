<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    use HasFactory;
    protected $table = 'types_of_status';
    protected $fillable = [
        'en_name',
    ];
}
