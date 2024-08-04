<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\StatusItemRequest;
use App\Models\ItemStatusType;
use App\Models\ItemStatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemStatusController extends Controller
{

    public function showStatusItemsForm()
    {
        $statusItems = ItemStatus::with('statusType')->get();
    $statuses = ItemStatusType::all();

    return view('item-status.index', compact('statuses', 'statusItems'));
    }
    public function store(StatusItemRequest $request)
    {

        $validatedData = $request->validated();

        ItemStatus::create($validatedData);
        return redirect()->back()->with('success', __('created successfully'));
    }
}