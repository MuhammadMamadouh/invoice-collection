<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScoreCriteriaRequest;
use App\Models\ScoreCriteria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScoreCriteriaController extends Controller
{
    public function store(ScoreCriteriaRequest $request)
    {
        try{
            ScoreCriteria::create($request->validated());
            return to_route('manage_risk.index')->with(['message' => __('success')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('manage_risk.index')->with(['message' => $e->getMessage()]);
        }
    }
    public function update(ScoreCriteriaRequest $request, $id)
    {
        $scoreCriteria = ScoreCriteria::findOrFail($id);
        try{
            $scoreCriteria->update($request->validated());
            return to_route('manage_risk.index')->with(['message' => __('success')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('manage_risk.index')->with(['message' => $e->getMessage()]);
        }
    }
    public function destroy($id)
    {
        
    }
}
