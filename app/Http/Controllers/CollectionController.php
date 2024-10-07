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
    public function manualActions()
    {
        $manualActions = ClientAction::getManualActions();
        $manualActionsCount = ClientAction::countManualActions();
        $automaticActionsCount = ClientAction::countAutomaticActions();
        return view('collection.manual_actions', compact('manualActions', 'manualActionsCount', 'automaticActionsCount'));
    }

    public function automaticActions()
    {
        $automaticActions = ClientAction::getAutomaticActions();
        $manualActionsCount = ClientAction::countManualActions();
        $automaticActionsCount = ClientAction::countAutomaticActions();
        return view('collection.automatic_actions', compact('automaticActions', 'automaticActionsCount', 'manualActionsCount'));
    }


}
