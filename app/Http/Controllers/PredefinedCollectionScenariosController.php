<?php

namespace App\Http\Controllers;

use App\Models\ActionType;
use App\Models\PredefinedCollectionScenarios;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PredefinedCollectionScenariosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
        ]);
        try {
            PredefinedCollectionScenarios::create([
                'en_name' => $request->en_name . ' (pre-defined)',
            ]);
            return back()->with(['message' => __('created successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'en_name' => 'required|string|max:255',
        ]);
        $collection = PredefinedCollectionScenarios::findOrFail($id);
        $collection->update([
            'en_name' => $request->en_name . ' (pre-defined)',
        ]);
        return back()->with(['message' => __('edited successfully')]);
    }


    public function destroy($id)
    {
        try {
            PredefinedCollectionScenarios::findOrFail($id)->delete();
            return back()->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }

    // public function duplicateScenario($id)
    // {
    //     try {
    //         $copyScenario = PredefinedCollectionScenarios::findOrFail($id);
    //         PredefinedCollectionScenarios::create([
    //             'en_name' => $copyScenario->en_name . ' (Copy)',
    //         ]);
    //         return to_route('collection_scenarios.index')->with(['message' => __(' duplicated successfully')]);
    //     } catch (Exception $e) {
    //         Log::info($e->getMessage());
    //         return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
    //     }
    // }
}
