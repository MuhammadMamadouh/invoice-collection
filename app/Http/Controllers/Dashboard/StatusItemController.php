<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\StatusItemRequest;
use App\Models\StatusType;
use App\Models\StatusItem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusItemController extends Controller
{

    public function showStatusItemsForm()
    {
        $statusItems = StatusItem::with('statusType')->get();
    $statuses = StatusType::all();

    return view('settings-manage-item-status', compact('statuses', 'statusItems')); // Pass items to the view
    }
    public function store(StatusItemRequest $request)
    {
       
        // dd($request);
        $validatedData = $request->validated();
        
        // Example: Create a new item with the validated data
        StatusItem::create($validatedData);

        return response()->json(['message' => 'Item created successfully']);
    }
}
