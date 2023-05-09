<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Http\Requests\StoreGoalRequest;
use App\Http\Requests\UpdateGoalRequest;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreGoalRequest $request)
    {
        Goal::create([
            'roadmap' => $request -> inputRoadmap,
            'tahun_awal' => $request -> tahunAwal,
            'tahun_akhir' => $request -> tahunAkhir,
            'strategi_goal' => $request -> inputGoal
        ]) -> save();
        return redirect('/home') -> with('success', 'Goal/Periode has been stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGoalRequest $request, Goal $goal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
