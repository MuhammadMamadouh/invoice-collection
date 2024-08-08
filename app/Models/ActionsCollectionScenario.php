<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionsCollectionScenario extends Model
{
    use HasFactory;

    public $table = 'collection_scenario_actions';

    protected $fillable = ['action_name', 'number_of_days', 'action_type', 'collection_scenario_id',
    'mail_subject','mail_content','language','is_automatic_action'];

    public function Collection(){
        return $this->belongsTo(CollectionScenario::class);
    }
}
 