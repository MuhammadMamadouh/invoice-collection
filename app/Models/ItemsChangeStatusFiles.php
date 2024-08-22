<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsChangeStatusFiles extends Model
{
    use HasFactory;

    public $fillable = [
        'file_name',
        'desc',
        'visiable_in',
        'items_change_status_id',
    ];

    public function changedStatus()
    {
        return $this->belongsTo(ItemsChangeStatus::class, 'items_change_status_id');
    }
}
