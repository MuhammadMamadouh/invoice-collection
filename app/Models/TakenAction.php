<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakenAction extends Model
{
    use HasFactory;

    public $table = 'item_taken_actions';

    protected $fillable = [
    'item_id',
    'scenario_action_id',
    'action_date',
    'taken_by'
    ];

    
}
