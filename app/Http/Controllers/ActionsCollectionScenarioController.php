<?php

namespace App\Http\Controllers;

use App\Models\ActionsCollectionScenario;
use App\Models\Email;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // $request->validate([
        //     'action_name' => 'required|string|max:255',
        //     'number_of_days' => 'required|numeric',
        //     'action_type' => 'required|exists:action_types,id',
        //     'collection_scenario_id' => 'required|exists:collection_scenarios,id',
        //     // 'mail_subject' => 'nullable|string',
        //     // 'mail_content' => 'nullable|string',
        //     // 'language' => 'nullable|string',
        // ]);
        DB::beginTransaction();
        $newAction = ActionsCollectionScenario::create([
            'action_name' => $request->action_name,
            'action_type' => $request->action_type,
            'number_of_days' => $request->number_of_days,
            'collection_scenario_id' => $request->collection_scenario_id,
        ]);
        if ($request->action_type == 5) {
            $newAction = ActionsCollectionScenario::findOrFail($newAction->id);
            $newEmail = new Email([
                'created_by' => 1,
                'resolver' => 1,
                'subject' => $request->mail_subject,
                'message' => $request->mail_content,
                'automatic_action' => $request->is_automatic_action,
            ]);
            $newAction->emails()->save($newEmail);
        }
        DB::commit();
        return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'action_name' => 'required|string|max:255',
            'number_of_days' => 'required|numeric',
            'action_type' => 'required|string',
            'collection_scenario_id' => 'required|exists:collection_scenarios,id',
            // 'mail_subject'=>'nullable|string',
            // 'mail_content'=>'nullable|string',
            // 'language'=>'nullable|string',  
        ]);
        $collection = ActionsCollectionScenario::findOrFail($id);
        //dd($request->action_name);
        try {
            $collection->update([
                'action_name' => $request->action_name,
                'action_type' => $request->action_type,
                'number_of_days' => $request->number_of_days,
                'collection_scenario_id' => $request->collection_scenario_id,
                // 'mail_subject' => $request->mail_subject,
                // 'mail_content' => $request->mail_content,
                // 'language' => $request->language,
                // 'is_automatic_action' => $request->is_automatic_action ? $request->is_automatic_action : 0,
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
            ActionsCollectionScenario::findOrFail($id)->delete();
            return to_route('collection_scenarios.index')->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('collection_scenarios.index')->with(['message' => $e->getMessage()]);
        }
    }
}
