<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'company_code', 'trading_name', 'legal_id', 'vat_number', 'business_line', 
    'collector_id', 'collection_scenario_id','collector', 'collection_scenario', 'address', 'postal_code', 'post_office_box', 'city', 'state', 'country', 'website',
    'payment_term', 'payment_mean', 'insurer_guarantee', 'other_guarantees', 'credit_limit', 'late_payment_penalties', 'recovery_cost', 
    'interactive_emails'];
}
