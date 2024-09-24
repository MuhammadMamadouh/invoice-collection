<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredefinedCollectionScenariosAction extends Model
{
    use HasFactory;
    protected $fillable = ['action_name', 'number_of_days', 'action_type', 'collection_scenario_id'];

    public function collection(){
        return $this->belongsTo(PredefinedCollectionScenarios::class, 'collection_scenario_id');
    }

    public function actionType()
    {
        return $this->belongsTo(ActionType::class, 'action_type');
    }
}
