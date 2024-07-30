<?php

namespace App\Http\Controllers;
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
        return view('dashboard.actionCreate', compact('actionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate(
            [
                'en_name'        => 'required',
                'number_of_days' => 'required',
                'actionType_id'  => 'required',
            ]
            , $messages);

        Action::create($data);

        return "action stored successfully";
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

    public function messages()
    {
        return [
            'en_name.required' => 'Please enter action name',
            'number_of_days.required' => 'Please enter no. of days',
            'actionType_id.required' => 'please enter action type',
        ];
    }
}