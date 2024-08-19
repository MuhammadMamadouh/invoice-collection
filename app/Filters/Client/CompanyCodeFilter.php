<?php

namespace App\Filters\Client;
use App\Filters\AbstractBasicFilter;

class CompanyCodeFilter extends AbstractBasicFilter {


    public function filter($value)
    {
        return $this->builder->where('company_code','like',"%{$value}%");
    }
}
