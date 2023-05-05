<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Strategi;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreStrategiRequest;
use App\Http\Requests\UpdateStrategiRequest;
use Exception;
use Throwable;

class StrategiController extends Controller
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
    public function store(StoreStrategiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Strategi $strategi)
    {
        $id_strat = $strategi -> id_strategi;
        $id_jenis = $strategi -> id_jenis;
        $indikator = Strategi::find($id_strat) -> indikator;
        $jenis = Jenis::find($id_jenis);

        $query = DB::table('indikator')
            ->select('strategi.id_strategi', DB::raw('AVG(capaian.capaian) as average_capaian'))
            ->join('strategi','indikator.id_strategi','=', 'strategi.id_strategi')
            ->join('capaian','indikator.id_indikator','=','capaian.id_indikator')
            ->where('strategi.id_strategi','=', $id_strat)
            ->groupBy('strategi.id_strategi')
            ->first();
        try {
            $avg = $query -> average_capaian;
        } catch (Throwable $e) {
            report($e);
            $avg = 0;
        }
        return view('Renstra.strategi',[
            'strategi' => $strategi,
            'indikator' => $indikator,
            'jenis' => $jenis,
            'avg' => $avg,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Strategi $strategi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStrategiRequest $request, Strategi $strategi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Strategi $strategi)
    {
        //
    }
}
