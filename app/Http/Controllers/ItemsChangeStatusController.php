<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsChangeStatusRequest;
use App\Models\ItemsChangeStatus;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemsChangeStatusController extends Controller
{
    public function store(ItemsChangeStatusRequest $request)
    {
            ItemsChangeStatus::create([
                "item_id" => $request->item_id,
                "status_id" => $request->status_id,
                "status_action_id" => $request->status_action_id,
                "resolver" => $request->resolver,
                "created_by" => $request->created_by,
                "comments" => $request->comments,
                "file" => $request->hasFile('file') ? $request->file('file')->store('items_files', 'public'): null,
                "create_at" => $request->create_at,
                "visible_in" => $request->visible_in,
                "desc" => $request->desc,
            ]);
            return to_route('clients.index')->with(['message' => 'success']);
    }

    public function update(ItemsChangeStatusRequest $request, $id)
    {
        $ItemsChangeStatus = ItemsChangeStatus::findOrFail($id);
        try{
            $dataToUpdate = [
                "resolver" => $request->resolver,
                "comments" => $request->comments,
            ];
            if ($request->hasFile('file')) {
                $dataToUpdate['file'] = $request->file('file')->store('items_files', 'public');
            }
            $ItemsChangeStatus->update($dataToUpdate);
            return back()->with(['message' => 'success']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return back()->with(['message' => $e->getMessage()]);
        }
    }
}
