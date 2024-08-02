<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\ItemType;
use App\Models\Item;
use App\Models\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniqueItemController extends Controller
{
    public function showItemsForm()
    {
        $items = ItemType::all(); 
        $currencies = Currency::all();// Fetch all items from the database
        return view('settings-create-item', compact('items' ,'currencies')); // Pass items to the view
    }
  
    public function store(Request $request)
    {
       
        // dd($request);
     $request->validate([
            'item_type' => 'required|exists:item_types,id',
            'Company_code' => 'required|string|max:255',
            'PO_NO' => 'required|string|max:255',
            'File_NO' => 'required|string|max:255',
            'ERP_item_type' => 'required|string|max:255',
            'Business_case' => 'required|string|max:255',
            'Sales_manager' => 'required|string|max:255',
            'Sales_adrninistative' => 'required|string|max:255',
            'Customer_custom_field_1' => 'nullable|string|max:255',
            'Customer_custom_field_2' => 'nullable|string|max:255',
            'Order_date' => 'required|date',
            'Issue_date' => 'required|date',
            'Due_date' => 'required|date',
            'Payment_date' => 'nullable|date',
            'Currency' => 'required|string|max:255|exists:currencies,id',
            'Initial_amount_exc_Tax' => 'required|numeric',
            'Initial_amount_inc_Tax' => 'required|numeric',
            'Remaining_amount_exc_Tax' => 'required|numeric',
            'Remaining_amount_inc_Tax' => 'required|numeric',
        ]);

        // Create a new item using mass assignment
        Item::create($request->all());

        // Redirect or return a response
        return "good";
    }
 

}
