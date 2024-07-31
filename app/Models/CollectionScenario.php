<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionScenario extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function ActionScenarios(){
        return $this->hasMany(ActionsCollectionScenario::class, 'collection_scenarios_id');
    }
}
