<?php

namespace App\Enum;

use App\Imports\ClientImport;
use App\Imports\ContactImport;
use App\Imports\ItemImport;
use App\Imports\UserImport;

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

    public static function getkey($value): string
    {
        $values = self::getValues();
        foreach ($values as $item) {
            if ($item['value'] == $value) {
                return $item['name'];
            }
        }
        return '';
    }

    public static function toArray(): array
    {
        return [
            self::ITEMS,
            self::CLIENTS,
            self::CONTACTS,
            self::USERS
        ];
    }

    public static function keyWithExcelClassObject(){
        return [
            self::ITEMS => new ItemImport,
            self::CLIENTS => new ClientImport,
            self::CONTACTS => new ContactImport,
            self::USERS => new UserImport,
        ];
    }

    public static function getExcelClass($key){
        $keyWithExcelClass = self::keyWithExcelClassObject();
        return $keyWithExcelClass[$key];
    }

}
