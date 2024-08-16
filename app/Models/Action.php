<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable=['en_name', 'number_of_days','actionType_id'];
    use HasFactory;

    public function actionTypes()
    {
        return  $this->belongsTo(ActionType::class);
    }

}