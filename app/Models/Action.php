<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected $fillable = [
        'action_name',
        'action_date',
        'no_of_days',
        'action_type_id',
        'collection_scenario_id',
        'item_change_status_id',
        'item_id',
        'created_by',
        'automatic_action',
        'automatic_action_to_be_confirmed',
        'internal_interactive_emailLink',
        ];


    public function actionTypes()
    {
        return $this->belongsTo(ActionType::class, 'action_type');
    }


    public function Collection()
    {
        return $this->belongsTo(CollectionScenario::class, 'collection_scenario_id');
    }

    public function preDefinedCollection()
    {
        return $this->belongsTo(PredefinedCollectionScenarios::class, 'predefined_collection_scenario_id');
    }


    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }


    public function smsMessages()
    {
        return $this->morphMany(SmsMessage::class, 'messageable');
    }


    public function itemChangedStatus()
    {
        return $this->belongsTo(ItemsChangeStatus::class, 'item_change_status_id');
    }


    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
