<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActionRequest;
use App\Models\Action;
use App\Models\ActionType;
use Illuminate\Http\Request;

class ActionController extends Controller
{
     private $column =[
     'en_name',
     'number_of_days',
     'actionType_id',
    ];

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actionTypes = ActionType::get();
        return view('dashboard.action.actionCreate', compact('actionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActionRequest $request)
    {

        $data = $request->validated();
        Action::create($data);

        return __('created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}