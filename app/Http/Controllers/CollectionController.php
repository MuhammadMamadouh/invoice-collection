<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
use App\Models\CollectionScenario;
use App\Models\Item;
use App\Models\Client;
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
    public function index()
    {
        $items = Item::with('client')->paginate(10);
        $clients = Client::get();
        $users = User::where('active', 1)->with('role')->get();
        $combined = $clients->merge($users);
        return view('collection.index', compact('items', 'combined'));
    }
    public function manualActions()
    {
        $items = Item::with('client')->paginate(10);
        $clients = Client::get();
        $users = User::where('active', 1)->with('role')->get();
        $combined = $clients->merge($users);
        return view('collection.manual-actions', compact('items', 'combined'));
    }


}
