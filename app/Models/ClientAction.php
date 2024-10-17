<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClientAction extends Model
{
    public $table = 'view_client_item_actions';

    public static function getManualActions()
{
    return ClientAction::where('automatic_action', 0)
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('action_histories')
                ->whereColumn('action_histories.action_id', 'view_client_item_actions.action_id')
                ->whereColumn('action_histories.item_id', 'view_client_item_actions.item_id');
        })
        ->get();
}


    // public static function countManualActions()
    // {
    //     return ClientAction::where('automatic_action', 0)->count();
    // }


    public static function getAutomaticActions()
    {
        return ClientAction::where('automatic_action', 1)
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('action_histories')
                ->whereColumn('action_histories.action_id', 'view_client_item_actions.action_id')
                ->whereColumn('action_histories.item_id', 'view_client_item_actions.item_id');
        })
        ->get();
    }

    public static function countAutomaticActions()
    {
        return ClientAction::where('automatic_action', 1)->count();
    }

}
