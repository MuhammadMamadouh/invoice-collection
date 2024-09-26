<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActionRequest;
use App\Models\Action;
use App\Models\ActionType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActionController extends Controller
{

    public function store(Request $request)
    {
        // DB::beginTransaction();
        Action::create([
            'action_name' => $request->action_name,
            'action_type' => $request->action_type,
            'action_date' => $request->action_date,
            'created_by' => $request->created_by,
            'collection_scenario_id' => $request->collection_scenario_id,
            'predefined_collection_scenario_id' => $request->predefined_collection_scenario_id,
            'is_pre_defined' => $request->is_pre_defined ?? 0,
            
        ]);
        // if ($request->action_type == 5) {
        //     $newAction = ActionsCollectionScenario::findOrFail($newAction->id);
        //     $newEmail = new Email([
        //         'created_by' => 1,
        //         'resolver' => 1,
        //         'subject' => $request->mail_subject,
        //         'message' => $request->mail_content,
        //         'automatic_action' => $request->is_automatic_action,
        //     ]);
        //     $newAction->emails()->save($newEmail);
        // }
        // DB::commit();
        return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'action_name' => 'required|string|max:255',
        //     'action_date' => 'required|date',
        //     'action_type' => 'required|string',
        //     'collection_scenario_id' => 'required|exists:collection_scenarios,id',
        // ]);
        $action = Action::findOrFail($id);
        try {
            $action->update([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'action_date' => $request->action_date,
                'collection_scenario_id' => $action->collection_scenario_id,
                'predefined_collection_scenario_id' => $action->predefined_collection_scenario_id,
                'created_by' => $request->created_by,
                'is_pre_defined' => $request->is_pre_defined ?? 0,
            ]);
            return to_route('collection_scenarios.index')->with(['message' => __('edited successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            Action::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }


}