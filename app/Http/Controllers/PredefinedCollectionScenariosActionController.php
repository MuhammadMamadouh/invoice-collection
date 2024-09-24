<?php

namespace App\Http\Controllers;

use App\Models\PredefinedCollectionScenariosAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PredefinedCollectionScenariosActionController extends Controller
{
    public function store(Request $request)
    {;
        $request->validate([
            'action_name' => 'required|string|max:255',
            'number_of_days' => 'required|numeric',
            'action_type' => 'required|string',
        ]);
        try{
            PredefinedCollectionScenariosAction::create([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'number_of_days' => $request->number_of_days,
                'collection_scenario_id' => $request->collection_scenario_id,
            ]);
            return back()->with(['message' => __('created successfully')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'action_name' => 'required|string|max:255',
            'number_of_days' => 'required|numeric',
            'action_type' => 'required|string',
        ]);
        $collection = PredefinedCollectionScenariosAction::findOrFail($id);
        try {
            $collection->update([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'number_of_days' => $request->number_of_days,
                'collection_scenario_id' => $collection->collection_scenario_id,
            ]);
            return back()->with(['message' => __('edited successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }
    

    public function destroy($id)
    {
        try {
            PredefinedCollectionScenariosAction::findOrFail($id)->delete();
            return back()->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }
}
