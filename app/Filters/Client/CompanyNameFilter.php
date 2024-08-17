<?php

namespace App\Filters\Client;
use App\Filters\AbstractBasicFilter;

class CompanyNameFilter extends AbstractBasicFilter {


    public function filter($value)
    {
        return $this->builder->where('company_name','like',"%{$value}%");
    }
}
