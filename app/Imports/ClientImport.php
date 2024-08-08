<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;



class ClientImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row)
        {
            Client::create([
                'company_name'              => $row['company_business_name'],
                'company_code'              => $row['company_code'],
                'trading_name'              => $row['trading_name'],
                'legal_id'                  => $row['legal_id'],
                'vat_number'                => $row['vat_number'],
                'business_line'             => $row['business_line'],
                // 'collector_id'              => $row['collector_id'],
                // 'collection_scenario_id'    => $row['collection_scenario_id'],
                'address'                   => $row['address_street'],
                'postal_code'               => $row['address_postal_code'],
                'post_office_box'           => $row['address_post_office_box'],
                'city'                      => $row['address_city'],
                'state'                     => $row['address_state'],
                'country'                   => $row['address_country'],
                'website'                   => $row['website'],
                'payment_term'              => $row['payment_term'],
                'payment_mean'              => $row['payment_mean'],
                'insurer_guarantee'         => $row['insurer_guarantee'],
                'other_guarantees'          => $row['other_guarantees'],
                'credit_limit'              => $row['credit_limit'],
                // 'late_payment_penalties'    => $row['late_payment_penalties'],
                // 'recovery_cost'             => $row['recovery_cost'],
                // 'interactive_emails'        => $row['interactive_emails'],
                // 'customer_custom_field_1'   => $row['customer_custom_field_1'],
                // 'customer_custom_field_2'   => $row['customer_custom_field_2'],
            ]);
        }
    }

    public function model(array $row)
    {
        return new Client([
            'company_name'          => $row['company_name'],
        'company_code'              => $row['company_code'],
        'trading_name'              => $row['trading_name'],
        'legal_id'                  => $row['legal_id'],
        'vat_number'                => $row['vat_number'],
        'business_line'             => $row['business_line'],
        'collector_id'              => $row['collector_id'],
        'collection_scenario_id'    => $row['collection_scenario_id'],
        'address'                   => $row['address'],
        'postal_code'               => $row['postal_code'],
        'post_office_box'           => $row['post_office_box'],
        'city'                      => $row['city'],
        'state'                     => $row['state'],
        'country'                   => $row['country'],
        'website'                   => $row['website'],
        'payment_term'              => $row['payment_term'],
        'payment_mean'              => $row['payment_mean'],
        'insurer_guarantee'         => $row['insurer_guarantee'],
        'other_guarantees'          => $row['other_guarantees'],
        'credit_limit'              => $row['credit_limit'],
        'late_payment_penalties'    => $row['late_payment_penalties'],
        'recovery_cost'             => $row['recovery_cost'],
        'interactive_emails'        => $row['interactive_emails'],
        'customer_custom_field_1'   => $row['customer_custom_field_1'],
        'customer_custom_field_2'   => $row['customer_custom_field_2'],
        ]);
    }
}
