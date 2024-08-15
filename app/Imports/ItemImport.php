<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Item;
use App\Models\ItemType;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\RemembersRowNumber;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;

class ItemImport implements ToCollection, WithHeadingRow,
// SkipsOnError,
// SkipsOnFailure,
// SkipsEmptyRows,
WithChunkReading
{

    use  RemembersRowNumber, SkipsFailures;
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row)
        {
            // dd($row);
            Item::create([
                'item_type_id'              => $this->getItemTypeId($row['item_type']),
                'company_id'                => $this->getComapnyId($row['company_code']),
                'po_no'                     => $row['po_no'],
                'file_no'                   => $row['file_no'],
                'erp_item_type'             => $row['erp_item_type'],
                'business_case'             => $row['business_case'],
                'sales_manager'             => $row[''],
                'sales_administrative'      => $row['sales_administrative'], // Check if this should be 'Sales_administrative'
                'customer_custom_field_1'   => $row[''],
                'customer_custom_field_2'   => $row[''],
                'order_date'                => $row[''],
                'issue_date'                => $row['issue_date'],
                'due_date'                  => $row['due_date'],
                'payment_date'              => $row['payment_date'],
                'currency_id'               => $row[''],
                'initial_amount_exc_tax'    => $row['initial_amount_exc_tax'],
                'initial_amount_inc_tax'    => $row['initial_amount_inc_tax'],
                'remaining_amount_exc_tax'  => $row['remaining_amount_exc_tax'],
                'remaining_amount_inc_tax'  => $row['remaining_amount_inc_tax'],
            ]);
            // Company code *	Item No. *	Unique item identifier	Initial amount exc.
            // 		Currency *			Payment date	Order No.
            //  Order date	ERP item type	Item type *	File No.
            //  Sales manager

        }
    }

    public function getItemTypeId($item_type){
        $item = ItemType::where('name', $item_type)->first();
        if($item){
            return $item->id;
        }
        return null;
    }

    public function getComapnyId($company_code){
        $company = Client::where('company_code', $company_code)->first();
        if($company){
            return $company->id;
        }
        return null;
    }

    public function chunkSize(): int{
        return 1000;
    }

    public function rules(): array
    {
        return [
            '*.company_business_name'     => 'required|string|max:255',
            '*.company_code'              => 'required|string|max:255',
            '*.trading_name'              => 'nullable|string|max:255',
            '*.legal_id'                  => 'nullable|string|max:255',
            '*.vat_number'                => 'nullable|string|max:255',
            '*.business_line'             => 'nullable|string|max:255',
            '*.address_street'            => 'nullable|string|max:255',
            '*.address_postal_code'       => 'nullable|string|max:255',
            '*.address_post_office_box'   => 'nullable|string|max:255',
            '*.address_city'              => 'nullable|string|max:255',
            '*.address_state'             => 'nullable|string|max:255',
            '*.address_country'           => 'nullable|string|max:255',
            '*.website'                   => 'nullable|string|max:255',
            '*.payment_term'              => 'nullable|string|max:255',
            '*.payment_mean'              => 'nullable|string|max:255',
            '*.insurer_guarantee'         => 'nullable|string|max:255',
            '*.other_guarantees'          => 'nullable|string|max:255',
            '*.credit_limit'              => 'nullable|string|max:255',
        ];
    }


    public function model(array $row)
    {
        return new Client([
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
