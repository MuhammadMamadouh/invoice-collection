<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsChangeStatus extends Model
{
    use HasFactory;

    protected $table = 'items_change_status';
    public $fillable = [
        'item_id',
        'status_id',
        'status_action_id',
        'resolver',
        'created_by',
        'comments',
        'create_at',
        'follow_the_collection_scenario',
        'create_a_specific_action',
    ];

    public function statusResolver()
    {
        return $this->belongsTo(User::class, 'resolver');
    }

    public function subject()
    {
        return $this->belongsTo(Client::class, 'subject');
    }

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function changedStatusItem()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }

    public function itemActions()
    {
        return $this->hasMany(Action::class, 'item_change_status_id');
    }

    public function smsMessages()
    {
        return $this->morphMany(SmsMessage::class, 'messageable');
    }

}
