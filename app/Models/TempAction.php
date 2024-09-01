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

}
