<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\ActionsCollectionScenario;
use App\Models\CollectionScenario;
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
        $collections = CollectionScenario::with('ActionScenarios')->get();
        $actionTypes = DB::table('action_types')->get();
        return view('collection_scenarios.index', compact('collections', 'actionTypes', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('collection_scenarios.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        try{
            CollectionScenario::create([
                'name' => $request->name,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => 'created successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CollectionScenario $collectionScenario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $collection = CollectionScenario::findOrFail($id);
    //     return view('collection_scenarios.edit', compact('collection'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $collection = CollectionScenario::findOrFail($id);
        try{
            $collection->update($request->validated());
            return to_route('collection_scenarios.index')->with(['message' => 'edited successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            CollectionScenario::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => 'deleted successflly']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function duplicateScenario($id)
{
    try {
        $copyScenario = CollectionScenario::findOrFail($id);
        CollectionScenario::create([
            'name' =>  $copyScenario->name . ' (Copy)',
        ]);
        return to_route('collection_scenarios.index')->with(['message' => 'Action scenario duplicated successfully']);
    } catch (Exception $e) {
        Log::info($e->getMessage());
        return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
    }
}

    public function storeAction(Request $request)
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

    public function updateAction(Request $request, $id)
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

    public function destroyAction($id)
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
