<?php


namespace App\Enum;

class ActionType {



    public static function actionTypes(){
        return [
            'Litigation',
            'Dunning letter (Standard letter)',
            'Dunning letter with AR (Acknowledgment of Receipt)',
            'Dunning letter via ERM (Electronic Registered Mail)',
            'E-mail',
            'Fax',
            'SMS',
            'Phone',
        ];
    }


    public static function getActionType($actionType)
    {
        $actionTypes = self::actionTypes();
        return $actionTypes[$actionType];
    }
}
