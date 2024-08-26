<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsChangeStatusFiles extends Model
{
    use HasFactory;

    public $fillable = [
        'file_name',
        'file_size',
        'desc',
        'visiable_in',
        'items_change_status_id',
    ];

    public function changedStatus()
    {
        return $this->belongsTo(ItemsChangeStatus::class, 'items_change_status_id');
    }

    public function getReadableFileSizeAttribute()
    {
        $bytes = $this->attributes['file_size'];
        if ($bytes >= 1073741824) {
            $size = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $size = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $size = number_format($bytes / 1024, 2) . ' KB';
        } else {
            $size = $bytes . ' bytes';
        }
        return $size;
    }

}
