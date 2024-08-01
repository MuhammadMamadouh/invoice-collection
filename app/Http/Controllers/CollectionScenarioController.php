<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionScenarioRequest;
use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
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
        $collections = CollectionScenario::with('ActionScenarios', 'client')->get();
        $actionTypes = ActionType::all();
        return view('collection_scenarios.index', compact('collections', 'actionTypes', 'days'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        try {
            CollectionScenario::create([
                'name' => $request->name,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => 'created successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $collection = CollectionScenario::findOrFail($id);
        try {
            $collection->update([
                'name' => $request->name,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => 'edited successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            CollectionScenario::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => 'deleted successflly']);
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
                'name' => $copyScenario->name . ' (Copy)',
            ]);
            return to_route('collection_scenarios.index')->with(['message' => '{{__(Action scenario duplicated successfully)}}']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }
}
