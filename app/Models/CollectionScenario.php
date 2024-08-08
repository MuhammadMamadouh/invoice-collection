<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionScenario extends Model
{
    use HasFactory;

    public $table = 'collection_scenarios';

    protected $fillable = ['en_name'];

    public function scenariosActions()
    {
        return $this->hasMany(ActionsCollectionScenario::class, 'collection_scenario_id');
    }

    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
