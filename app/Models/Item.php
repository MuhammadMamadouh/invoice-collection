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
        'status_id',
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
        return $this->belongsTo(Client::class, 'company_id');
    }

    public function itemStatus()
    {
        return $this->belongsTo(ItemStatus::class, 'status_id');
    }

    public function takenActions()
    {
        return $this->belongsToMany(ActionsCollectionScenario::class, 'item_taken_actions',"scenario_action_id", 'item_id');
    }

    // public function toTakeAction()
    // {
    //     // get taken actions on first due item
    //     $firstDueTakenAction = $this->firstDueItem()->takenActions()->pluck('collection_scenario_id');
    //     return $this->collectionScenarios->scenariosActions()->whereNotIn('id', $firstDueTakenAction)
    //     ->orderBy('number_of_days')->first();
    // }

    public function toTakeAction()
    {
        $action =  $this->takenActions()->pluck('collection_scenario_id');
        return $this->client->collectionScenarios->scenariosActions()->whereNotIn('id',  $action)
        ->orderBy('number_of_days')->first();
    }
}
