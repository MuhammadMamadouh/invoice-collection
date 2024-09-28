<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\Action;
use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
use App\Models\CollectionScenario;
use App\Models\PredefinedCollectionScenarios;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollectionScenarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = [];
        for ($i = -90; $i <= 365; $i++) {
            $days[] = $i;
        }
        $collections = CollectionScenario::with('actionScenarios', 'client')->get();
        $preCollections = PredefinedCollectionScenarios::with('scenarioActions')->get();
        $actionTypes = ActionType::all();
        return view('collection_scenarios.index', compact('collections', 'actionTypes', 'days', 'preCollections'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
        ]);
        try {
            CollectionScenario::create([
                'en_name' => $request->en_name,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
        ]);
        $collection = CollectionScenario::findOrFail($id);
        $collection->update([
            'en_name' => $request->en_name,
        ]);
        return to_route('collection_scenarios.index')->with(['message' => __('edited successfully')]);
    }


    public function destroy($id)
    {
        try {
            CollectionScenario::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function duplicateScenario($id)
    {
        try {
            $copyScenario = CollectionScenario::findOrFail($id);
            CollectionScenario::create([
                'en_name' => $copyScenario->en_name . ' (Copy)',
            ]);
            return to_route('collection_scenarios.index')->with(['message' => __('duplicated successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function addPreDefinedCollection(Request $request)
    {
        $preDefinedCollection = PredefinedCollectionScenarios::with('scenarioActions')
        ->findOrFail($request->predefined_scenario_id);
        try{
            $newCollection = CollectionScenario::create([
                'en_name' => $preDefinedCollection->en_name
            ]);
            foreach($preDefinedCollection->scenarioActions as $preDefinedAction){
                Action::create([
                    'collection_scenario_id' => $newCollection->id,
                    'action_name' => $preDefinedAction->action_name,
                    'action_date' => $preDefinedAction->action_date,
                    'action_type' => $preDefinedAction->action_type,
                    'created_by'  => $request->created_by,
                    'is_pre_defined' => $request->is_pre_defined ?? 0,
                ]);
            }
            return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
        }catch (Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }
}
