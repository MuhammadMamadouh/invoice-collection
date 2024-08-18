<?php

namespace App\Http\Controllers;

use App\Models\CreditLimitsValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class CreditValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limitsValidations =  CreditLimitsValidation::with('user')->get();
        $users = User::all();
        return view('credit_validation.index', compact('limitsValidations', 'users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'credit_limit' => 'required|numeric', 
            'user_id' => 'required|exists:users,id',
        ]);
        try{
            CreditLimitsValidation::create($data);
            return to_route('credit-managment.index')->with(['message' => 'success']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('credit-managment.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'credit_limit' => 'required|numeric', 
            'user_id' => 'required|exists:users,id',
        ]);
        $limitsValidation = CreditLimitsValidation::findOrFail($id);
        try{
            $limitsValidation->update($data);
            return to_route('credit-managment.index')->with(['message' => 'success']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('credit-managment.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    { 
        try{
            CreditLimitsValidation::findOrFail($id)->delete();
            return to_route('credit-managment.index')->with(['message' => 'success']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('credit-managment.index')->with(['message' => $e->getMessage()]);
        }
    }
}
