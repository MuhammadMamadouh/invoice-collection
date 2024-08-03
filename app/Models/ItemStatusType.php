<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemStatusType extends Model
{
    use HasFactory;
    protected $table = 'item_status_type';
    protected $fillable = ['en_name'];
}
