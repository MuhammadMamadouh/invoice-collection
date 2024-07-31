<?php

namespace App\Http\Controllers;

use App\Models\ActionsCollectionScenario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActionsCollectionScenarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'action_name' => 'required|string|max:255',
            'number_of_days' => 'required|numeric',
            'action_type' => 'required|string',
            'collection_scenarios_id' => 'required|exists:collection_scenarios,id',
        ]);
        try{
            ActionsCollectionScenario::create([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'number_of_days' => $request->number_of_days,
                'collection_scenarios_id' => $request->collection_scenarios_id,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => 'created successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'action_name' => 'required|string|max:255',
            'number_of_days' => 'required|numeric',
            'action_type' => 'required|string',
            'collection_scenarios_id' => 'required|exists:collection_scenarios,id',
        ]);
        $collection = ActionsCollectionScenario::findOrFail($id);
        try{
            $collection->update([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'number_of_days' => $request->number_of_days,
                'collection_scenarios_id' => $request->collection_scenarios_id,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => 'edited successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try{
            ActionsCollectionScenario::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => 'deleted successflly']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }
}
