<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingCreditValidation extends Model
{
    use HasFactory;

    public $fillable = [
        'num_of_days',
        'actions',
        'validation_of_lower_levels',
    ];
}
