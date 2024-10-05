<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionScenario extends Model
{
    use HasFactory;

    public $table = 'collection_scenarios';

    protected $fillable = ['en_name', 'is_active', 'is_pre_defined'];

    // general scope to get non pre-defined scenarios
    public function scopeNotPreDefined($query){
        return $query->where('is_pre_defined', 0);
    }

    // scope to get pre defined scenarios
    public function scopePreDefined($query){
        return $query->where('is_pre_defined', 1);
    }

    public function actions(){
        return $this->hasMany(Action::class, 'collection_scenario_id');
    }

    public function client(){
        return $this->hasMany(Client::class);
    }
}
