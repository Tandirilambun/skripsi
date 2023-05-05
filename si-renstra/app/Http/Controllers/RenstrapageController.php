<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Strategi;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class RenstrapageController extends Controller
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
        //
    }

    private function databaseQuery($id, $keterangan){
        $general = DB::table('strategi')
                -> select('goal.roadmap','jenis.jenis', 'strategi.id_strategi', 'strategi.deskripsi_strategi')
                -> join ('jenis', 'strategi.id_jenis', '=', 'jenis.id_jenis')
                -> join ('goal', 'strategi.id_goal', '=', 'goal.id_goal')
                // -> join ('indikator', 'strategi.id_strategi', '=', 'indikator.id_strategi')
                // -> join ('capaian', 'indikator.id_indikator','=', 'capaian.id_indikator')
                -> where('goal.id_goal','=', $id)
                -> where('jenis.jenis','=', $keterangan)
                // -> groupBy('goal.roadmap', 'jenis.jenis', 'strategi.id_strategi')
                -> get();
        // foreach ($general as $key => $value) {
        //     $get_id = $value -> id_strategi;
        //     $query = DB::table('strategi')
        //             -> select('strategi.id_strategi','strategi.deskripsi_strategi', DB::raw('AVG(capaian.capaian) as avg_capaian'))
        //             -> join ('indikator', 'strategi.id_strategi', '=', 'indikator.id_strategi')
        //             -> join ('capaian', 'indikator.id_indikator','=', 'capaian.id_indikator')
        //             -> where ('strategi.id_strategi','=', $get_id)
        //             -> groupBy('strategi.id_strategi')
        //             -> first();
        //     dump($query);
        // }
        return $general;
    }

    //     return $avg;
    // }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $periodes = Goal::find($id);
        $jenis = Jenis::all();

        //untuk ambil strategi
        $generals= $this -> databaseQuery($id, 'General Objective');
        $ultimates = $this -> databaseQuery($id, 'Ultimate Objective');
        $intermediates = $this -> databaseQuery($id, 'Intermediate Objective');
        $outcomes = $this -> databaseQuery($id, 'Outcome');
        $useofoutputs = $this -> databaseQuery($id, 'Use of Output');
        $outputs = $this -> databaseQuery($id, 'Output');


        return view('Renstra.renstrapage',[
            'periodes' => $periodes,
            'generals' => $generals,
            'ultimates' => $ultimates,
            'intermediates' => $intermediates,
            'outcomes' => $outcomes,
            'useofoutputs' => $useofoutputs,
            'outputs' => $outputs,
            'jenis' => $jenis,
        ]);
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
