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
        $groupedStatusItems = [];

        foreach ($statusItems as $item) {
            $typeOfStatus = $item->type_of_status;
            
        
            if (!isset($groupedStatusItems[$typeOfStatus])) {
                $groupedStatusItems[$typeOfStatus] = [];
            }
        
            $groupedStatusItems[$typeOfStatus][] = $item;
        }
        //dd($groupedStatusItems);
       $statuses = ItemStatusType::all();

    return view('item-status.index', compact('statuses', 'statusItems','groupedStatusItems'));
    }
    public function store(StatusItemRequest $request)
    {

        $validatedData = $request->validated();

        ItemStatus::create($validatedData);
        return redirect()->back()->with('success', 'Status item created successfully.');
    }
}
