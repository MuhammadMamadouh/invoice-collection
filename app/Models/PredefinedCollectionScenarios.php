<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredefinedCollectionScenarios extends Model
{
    use HasFactory;

    protected $fillable = ['en_name'];

    public function scenarioActions(){
        return $this->hasMany(Action::class, 'predefined_collection_scenario_id');
    }
}

