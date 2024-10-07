<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAction extends Model
{
    public $table = 'view_client_item_actions';


    public static function getManualActions()
    {
        return ClientAction::where('automatic_action', 0)->get();
    }

    public static function countManualActions()
    {
        return ClientAction::where('automatic_action', 0)->count();
    }


    public static function getAutomaticActions()
    {
        return ClientAction::where('automatic_action', 1)->get();
    }

    public static function countAutomaticActions()
    {
        return ClientAction::where('automatic_action', 1)->count();
    }

}
