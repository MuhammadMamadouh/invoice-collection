<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\StatusItemRequest;
use App\Models\StatusType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusItemController extends Controller
{
    public function showStatusItemsForm()
    {
        $itemstatus = StatusType::all(); 
      
        return view('settings-manage-item-status', compact('itemstatus' )); // Pass items to the view
    }
    public function store(StatusItemRequest $request)
    {
       
        // dd($request);
        $validatedData = $request->validated();

        // Example: Create a new item with the validated data
        // Item::create($validatedData);

        return response()->json(['message' => 'Item created successfully']);
    }
}
