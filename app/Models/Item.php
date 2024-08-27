<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    // protected $table = 'items';

    // The attributes that are mass assignable
    protected $fillable = [
        'item_type_id',
        'company_id',
        'status_id',
        'trans_no',
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
        return $this->belongsTo(Client::class,'company_id');
    }
    public function itemStatus()
    {
        return $this->belongsTo(ItemStatus::class, 'status_id');
    }
    public function is_overdue()
    {
        $is_overdue = now()->gt($this->due_date) ? true : false;
        return $is_overdue;
    } 
    public function overdue()
    {
        $over_due_days = now()->diffInDays($this->due_date, false) * -1;
        $overdue = $over_due_days > 0 ? "+$over_due_days" : "$over_due_days";
        return $overdue;
    } 

    public function itemChangeStatus()
    {
        return $this->hasMany(ItemsChangeStatus::class, 'item_id');
    }

    // public function itemFiles()
    // {
    //     return $this->hasMany(ItemsChangeStatusFiles::class, 'item_id');
    // }
}
