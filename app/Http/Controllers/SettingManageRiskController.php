<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingManageRiskRequest;
use App\Models\SettingManageRisk;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SettingManageRiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numberOfDays = [];
        for ($i = 5; $i <= 730; $i += 5) {
            $numberOfDays[] = $i;
        }
        $numbers = range(1, 200);
        return view('manage_risk.setting_manage_risk', compact('numbers', 'numberOfDays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingManageRiskRequest $request)
    {
        try{
            SettingManageRisk::create($request->validated());
            return to_route('settings.index')->with([ 'message' => 'success']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('settings.index')->with([ 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SettingManageRisk $settingManageRisk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SettingManageRisk $settingManageRisk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SettingManageRisk $settingManageRisk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SettingManageRisk $settingManageRisk)
    {
        //
    }
}
