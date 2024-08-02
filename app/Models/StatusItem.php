<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusItem extends Model
{
    use HasFactory;
    protected $table = 'status_of_items';

    // The attributes that are mass assignable
    protected $fillable = ['type_of_status', 'status','follow_up_days'];
    public function statusType()
    {
        return $this->belongsTo(StatusType::class , 'type_of_status');
    }
}
