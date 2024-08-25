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
        'email_type',
        'type_to',
        'subject',
        'message',
        'get_a_copy',
        'request_an_acknowledgment',
    ];

    public function statusResolver()
    {
        return $this->belongsTo(User::class, 'resolver');
    }

    public function subject()
    {
        return $this->belongsTo(Client::class, 'subject');
    }

    public function statusFiles()
    {
        return $this->hasMany(ItemsChangeStatusFiles::class, 'items_change_status_id');
    }

    public function changedStatusItem()
    {
        return $this->belongsTo(Client::class, 'item_id');
    }
}
