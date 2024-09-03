<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempAction extends Model
{
    use HasFactory;

    public $fillable = [
        'action_name',
        'action_date',
        'action_type',
        'collection_scenario_id',
        'client_id',
        'item_id',
        'created_by',
        'item_change_status_id',
    ];

    public function itemChangedStatus()
    {
        return $this->belongsTo(ItemsChangeStatus::class, 'item_change_status_id');
    }

    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }
    public function smsMessages()
    {
        return $this->morphMany(SmsMessage::class, 'messageable');
    }
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function actionTypes()
    {
        return $this->belongsTo(ActionType::class, 'action_type');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
