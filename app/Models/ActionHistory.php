<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionHistory extends Model
{
    use HasFactory;

    public $fillable = [
    'action_id',
    'item_id',
    'client_id',
    'item_change_status_id',
    ];

    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }


    public function smsMessages()
    {
        return $this->morphMany(SmsMessage::class, 'messageable');
    }

    public static function getActionHistory()
    {
        // return ActionHistory::with('item.client', 'action.actionTypes', 'client.items')
        // ->orderBy('created_at')->get();
        return ActionHistory::with('item.client', 'action.actionTypes')
        ->orderBy('created_at')->get();
    }

}
