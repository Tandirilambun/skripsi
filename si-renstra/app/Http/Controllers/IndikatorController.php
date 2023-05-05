<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Http\Requests\StoreIndikatorRequest;
use App\Http\Requests\UpdateIndikatorRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Throwable;

class IndikatorController extends Controller
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
    public function store(StoreIndikatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
        $get_id = $indikator->id_indikator;
        $capaians = Indikator::find($get_id) -> capaian;
        $avg_capaian = round($capaians -> avg('capaian'));
        return view ('Renstra.indikator',[
            'indikator' => $indikator,
            'capaians' => $capaians,
            'avg_capaian' => $avg_capaian,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indikator $indikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndikatorRequest $request, Indikator $indikator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        //
    }
}
