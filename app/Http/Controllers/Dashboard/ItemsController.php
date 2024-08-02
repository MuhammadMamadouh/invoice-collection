<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\ItemRequest;
use App\Models\ItemType;
use App\Models\Item;
use App\Models\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function showItemsForm()
    {
        $items = ItemType::all(); 
        $currencies = Currency::all();// Fetch all items from the database
        return view('settings-create-item', compact('items' ,'currencies')); // Pass items to the view
    }
  
    public function store(ItemRequest $request)
    {
       
        // dd($request);
        $validatedData = $request->validated();

        // Example: Create a new item with the validated data
        // Item::create($validatedData);

        return response()->json(['message' => 'Item created successfully']);
    }
}
