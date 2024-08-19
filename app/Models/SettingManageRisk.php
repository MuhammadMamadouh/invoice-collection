<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingManageRisk extends Model
{
    use HasFactory;

    public $fillable = [
        'credit_insurance',
        'credit_limits_validity_duration',
        'alert_when_the_total_receivable_reaches',
        'grace_period',
        'time_limit_for_declaring',
        'amount_of_discretionary_limit',
        'days_compared'
    ];
}
