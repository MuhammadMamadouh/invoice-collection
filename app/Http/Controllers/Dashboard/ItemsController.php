<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\ItemRequest;
use App\Http\Resources\ItemResource;
use App\Models\ItemType;
use App\Models\Item;
use App\Models\Currency;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ItemStatus;
use App\Models\ItemStatusType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemsController extends Controller
{
    public function create()
    {
        $item_types = ItemType::all();
        $item_status = ItemStatusType::all();
        $currencies = Currency::all();
        $companies  = Client::all(['id', 'company_name', 'company_code']);
        return view('items.create', compact('item_types' ,'item_status', 'currencies', 'companies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->all();
        Item::create($validatedData);
        return redirect()->back()->with('success', __('created successfully'));
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $itemTypes = ItemType::all();
        $clients = Client::all(['id', 'company_name', 'company_code']);
        $item = (new ItemResource($item))->response()->getData()->data;
        $currencies = Currency::all();
        return view('items.show', compact('item', 'itemTypes', 'clients', 'currencies'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        try{
            $item->update($request->all());
            return redirect()->back()->with('message', __('created successfully'));
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->back()->with('message', $e->getMessage());
        }
    }
}
