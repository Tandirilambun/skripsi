<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\Indikator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreIndikatorRequest;
use App\Http\Requests\UpdateIndikatorRequest;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

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
    public function store(Request $request)
    {
        return $request;
        Indikator::create([
            'id_strategi' => $request -> selectStrategi,
            'deskripsi_indikator' => $request -> inputIndikator
        ]) -> save();
        return redirect('/home') -> with('success', 'indikator has been stored successfully');
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
        return $indikator -> id_indikator;
        Indikator::destroy($indikator -> id_indikator);
        return redirect('/home') -> with('success', 'Indikator has been deleted successfully');
    }
}
