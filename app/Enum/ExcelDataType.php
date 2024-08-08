<?php

namespace App\Enum;

class ExcelDataType
{
    const ITEMS = 1;

    const CLIENTS = 2;

    const CONTACTS = 3;

    const USERS = 4;


    public static function getValues(): array
    {
        return [
            [
                'value' => self::ITEMS,
                'name'  => 'Items (Invoices, ...)'
            ],
            [
                'value' => self::CLIENTS,
                'name'  => 'Clients'
            ],
            [
                'value' => self::CONTACTS,
                'name'  => 'Contacts'
            ],
            [
                'value' => self::USERS,
                'name'  => 'Users (Associates)'
            ]
        ];
    }

}
