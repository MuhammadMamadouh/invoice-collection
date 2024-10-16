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
        'item_type_id',
        'company_id',
        'po_no',
        'file_no',
        'erp_item_type',
        'business_case',
        'sales_manager',
        'sales_administrative', // Check if this should be 'Sales_administrative'
        'customer_custom_field_1',
        'customer_custom_field_2',
        'order_date',
        'issue_date',
        'due_date',
        'payment_date',
        'currency_id',
        'initial_amount_exc_tax',
        'initial_amount_inc_tax',
        'remaining_amount_exc_tax',
        'remaining_amount_inc_tax',
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


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
