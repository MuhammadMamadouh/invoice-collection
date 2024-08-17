<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = Score::with('scoreCriterias')->get();
        $numbers = range(1, 100);
        return view('manage_risk.score_data', compact('scores', 'numbers'));
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
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        try{
            Score::create($validData);
            return to_route('manage_risk.index')->with(['message' => __('success')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('manage_risk.index')->with(['message' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        $score = Score::findOrFail($id);
        try{
            $score->update($validData);
            return to_route('manage_risk.index')->with(['message' => __('success')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('manage_risk.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            Score::findOrFail($id)->delete();
            return to_route('manage_risk.index')->with(['message' => __('success')]);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return to_route('manage_risk.index')->with(['message' => $e->getMessage()]);
        }
    }
}
