<?php

namespace App\Enum;

class RoleEnum
{

    const CREDIT_MANAGER = 1;
    const COLLECTOR = 2;
    const SALES_MANAGER = 3;
    const SALES_ADMINISTRATION = 4;
    const FINANCIAL_CONTROLLER = 5;
    const EXECUTIVE_OFFICER = 6;
    const GUEST = 7;
    

    const ROLES = [
        'Credit Manager',
        'Collector',
        'Sales Manager',
        'Sales Administration',
        'Financial Controller',
        'Executive Officer',
        'Guest'
    ];
}
