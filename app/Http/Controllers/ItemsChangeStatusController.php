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

            $item = new ItemsChangeStatus;
            $item->item_id = $request->item_id;
            $item->status_id = $request->status_id;
            $item->status_action_id = $request->status_action_id;
            $item->resolver = $request->resolver;
            $item->created_by = $request->created_by;
            $item->comments = $request->comments;
            if ($request->file) $item->file = $request->file('file')->store('items_files');
            $item->create_at = $request->create_at;
            $item->visible_in = $request->visible_in;
            $item->save();
            return to_route('clients.index')->with(['message' => 'success']);

    }
}
