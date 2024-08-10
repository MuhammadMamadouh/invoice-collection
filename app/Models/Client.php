<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_code',
        'trading_name',
        'legal_id',
        'vat_number',
        'business_line',
        'collector_id',
        'collection_scenario_id',
        'address',
        'postal_code',
        'post_office_box',
        'city',
        'state',
        'country',
        'website',
        'payment_term',
        'payment_mean',
        'insurer_guarantee',
        'other_guarantees',
        'credit_limit',
        'late_payment_penalties',
        'recovery_cost',
        'interactive_emails',
        'customer_custom_field_1',
        'customer_custom_field_2'
    ];

    public function collectionScenarios()
    {
        return $this->belongsTo(CollectionScenario::class, 'collection_scenario_id');
    }

    public function collector()
    {
        return $this->belongsTo(User::class, 'collector_id');
    }

    public function clientsGroups()
    {
        return $this->belongsToMany(ClientsGroup::class, 'clients_groups_pivot', 'client_id', 'clients_group_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'company_id');
    }

    public function firstDueItem()
    {
        return $this->items()->orderBy('due_date')->first();
    }

    public function toTakeAction()
    {
        // get taken actions on first due item
        $firstDueTakenAction = $this->firstDueItem()->takenActions()->pluck('collection_scenario_id');
        return $this->collectionScenarios->scenariosActions()->whereNotIn('id', $firstDueTakenAction)
        ->orderBy('number_of_days')->first();
    }


}
