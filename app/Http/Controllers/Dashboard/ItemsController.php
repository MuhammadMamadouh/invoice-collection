<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\ItemRequest;
use App\Models\ItemType;
use App\Models\Item;
use App\Models\Currency;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function create()
    {
        $item_types = ItemType::all();
        $currencies = Currency::all();
        $companies  = Client::all(['id', 'company_name', 'company_code']);

        return view('items.create', compact('item_types' ,'currencies', 'companies'));
    }

    public function store(ItemRequest $request)
    {
        $validatedData = $request->all();
        Item::create($validatedData);
        return redirect()->back()->with('success', __('created successfully'));
    }
}
