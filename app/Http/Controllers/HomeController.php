<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Jenis;
use App\Models\Strategi;
use App\Models\Indikator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodes = Goal::all();
        return view('home',[
            'periodes' => $periodes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $goals = Goal::all();
        $strategis = Strategi::all();
        $indikators = Indikator::all();
        $jenis = Jenis::all();
        return view ('Renstra.create',[
            'strategis' => $strategis,
            'indikators' => $indikators,
            'goals' => $goals,
            'jenis' => $jenis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
