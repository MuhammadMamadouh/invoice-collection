<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsChangeStatus extends Model
{
    use HasFactory;

    protected $table = 'items_change_status';
    public $fillable = [
        'item_id',
        'status_id',
        'status_action_id',
        'resolver',
        'created_by',
        'comments',
        'file',
        'create_at',
        'visible_in',
    ];
}
