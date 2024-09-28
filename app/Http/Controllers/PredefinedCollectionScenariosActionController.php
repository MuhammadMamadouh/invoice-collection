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
            'action_date' => 'required|date',
            'action_type' => 'required|string',
        ]);
        try{
            PredefinedCollectionScenariosAction::create([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'action_date' => $request->action_date,
                'created_by'  => $request->created_by,
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
            'action_date' => 'required|date',
            'action_type' => 'required|string',
        ]);
        $action = PredefinedCollectionScenariosAction::findOrFail($id);
        try {
            $action->update([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'action_date' => $request->action_date,
                'created_by'  => $request->created_by,
                'collection_scenario_id' => $action->collection_scenario_id,
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
