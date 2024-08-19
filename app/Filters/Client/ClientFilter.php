<?php

namespace App\Filters\Client;
use App\Filters\AbstractFilter;

class ClientFilter extends AbstractFilter {

    protected $filters = [
        'company_name'  =>    CompanyNameFilter::class,
        'company_code'  =>    CompanyCodeFilter::class,
    ];
}
