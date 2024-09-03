<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    protected $fillable=['en_name', "icon"];

    use HasFactory;

    public function actions(){
        return $this->hasMany(Action::class);
    }

    public function tempActions(){
        return $this->hasMany(TempAction::class, 'action_type');
    }
    
}