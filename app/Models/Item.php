<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    // The attributes that are mass assignable
    protected $fillable = [
        'item_type',
        'Company_code',
        'PO_NO',
        'File_NO',
        'ERP_item_type',
        'Business_case',
        'Sales_manager',
        'Sales_adrninistative', // Check if this should be 'Sales_administrative'
        'Customer_custom_field_1',
        'Customer_custom_field_2',
        'Order_date',
        'Issue_date',
        'Due_date',
        'Payment_date',
        'Currency',
        'Initial_amount_exc_Tax',
        'Initial_amount_inc_Tax',
        'Remaining_amount_exc_Tax',
        'Remaining_amount_inc_Tax',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'Order_date' => 'date',
        'Issue_date' => 'date',
        'Due_date' => 'date',
        'Payment_date' => 'date',
    ];
    public function itemType()
    {
        return $this->belongsTo(ItemType::class);
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
