<?php


namespace App\Enum;

use App\Models\ActionType as ModelsActionType;
use Illuminate\Support\Facades\Cache;

Cache::remember('action_types', 60, function () {
    return  ModelsActionType::all();
});

class ActionTypeEnum
{
    const Litigation = 1;
    const DunningLetter = 2;
    const DunningLetterWithAR = 3;
    const DunningLetterWithERM = 4;
    const Email = 5;
    const Fax = 6;
    const SMS = 7;
    const Phone = 8;


    public static function actionTypes()
    {
        return [
            [
                'name' => 'Litigation',
                'icon' => 'fa-bolt',
            ],
            [
                'name' => 'Dunning letter (Standard letter)',
                'icon' => 'fa-bolt',
            ],
            [
                'name' => 'Dunning letter with AR (Acknowledgment of Receipt)',
                'icon' => 'fa-bolt',
            ],
            [
                'name' => 'Dunning letter via ERM (Electronic Registered Mail)',
                'icon' => 'fa-lock',
            ],
            [
                'name' => 'E-mail',
                'icon' => 'fa-envelope',
            ],
            [
                'name' => 'Fax',
                'icon' => 'fa-fax',
            ],
            [
                'name' => 'SMS',
                'icon' => 'fa-mobile',
            ],
            [
                'name' => 'Phone',
                'icon' => 'fa-phone',
            ],
        ];
    }


    public static function getActionType($actionType)
    {
        $actionTypes = self::actionTypes();
        return view('clients.dates_line', $actionTypes[$actionType]);
    }
}