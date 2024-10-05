<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\Action;
use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
use App\Models\CollectionScenario;
use App\Models\Item;
use App\Models\Client;
use App\Models\ClientAction;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $items = Item::with('client')->paginate(10);
    //     $clients = Client::get();
    //     $users = User::where('active', 1)->with('role')->get();
    //     $combined = $clients->merge($users);
    //     return view('collection.index', compact('items', 'combined'));
    // }


    public function manualActions()
    {
        $manualActions = ClientAction::all();
        // dd($manualActions);
        return view('collection.manual_actions', compact('manualActions'));
    }




    // public function manualActions()
    // {
    //     $manualActions = Action::with('item.client', 'item.client.collectionScenario.client', 'actionTypes')
    //     ->where('automatic_action', 0)
    //     ->get();
    //     dd($manualActions);
    //     return view('collection.manual_actions', compact('manualActions'));
    // }


    // public function manualActions()
    // {
    //     $manualActions = Action::with('item.client', 'item.client.collectionScenario', 'actionTypes')
    //     ->whereHas('item.client.collectionScenario')
    //     ->whereHas('item', function($query) {
    //         $query->where('company_id', 1);
    //     })
    //     ->orderBy('created_at', 'desc')
    //     ->paginate(10);
    //     //dd($manualActions);
    //     return view('collection.manual_actions', compact('manualActions'));
    // }

    // public function manualActions()
    // {
    //     $manualActions = Item::with(['itemActions' => function ($query){
    //         $query->where('automatic_action', 0);
    //     }, 'client'])->whereNotNull('company_id')
    //     ->get();
    //     return view('collection.manual_actions', compact('manualActions'));
    // }


}
