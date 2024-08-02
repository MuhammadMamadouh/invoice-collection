<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusItem extends Model
{
    use HasFactory;
    protected $table = 'items';

    // The attributes that are mass assignable
    protected $fillable = [
'type_of_status',
'status',
'no_of_days_follow_up_action'

    ];
    public function statusType()
    {
        return $this->belongsTo(StatusType::class);
    }
}
