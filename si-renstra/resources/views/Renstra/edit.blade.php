{{-- @dump($periodes); --}}
@extends('main.index')

@section('index')

<div class="container py-5">
    <nav>
        <div class="nav nav-tabs tabsNav" id="nav-tab" role="tablist">
            <button class="nav-link active btnNav" id="nav-periode-tab" data-bs-toggle="tab" data-bs-target="#nav-periode" type="button" role="tab" aria-controls="nav-periode" aria-selected="true">Periode</button>
            <button class="nav-link btnNav" id="nav-goal-tab" data-bs-toggle="tab" data-bs-target="#nav-goal" type="button" role="tab" aria-controls="nav-goal" aria-selected="false">Goal</button>
            <button class="nav-link btnNav" id="nav-outcomes-tab" data-bs-toggle="tab" data-bs-target="#nav-outcomes" type="button" role="tab" aria-controls="nav-outcomes" aria-selected="false">Outcomes</button>
            <button class="nav-link btnNav" id="nav-outputs-tab" data-bs-toggle="tab" data-bs-target="#nav-outputs" type="button" role="tab" aria-controls="nav-outputs" aria-selected="false">Outputs</button>
            <button class="nav-link btnNav" id="nav-indikator-tab" data-bs-toggle="tab" data-bs-target="#nav-indikator" type="button" role="tab" aria-controls="nav-indikator" aria-selected="false">Indikator</button>
        </div>
    </nav>
    <div class="card card-container pb-3 shadow-sm" style="border-radius:0 0 20px 20px; border-color: transparent;">
        <div class="px-3 py-2">
            <h5 style="font-weight:bold; font-size:24px;">Update Data Rencana Strategis</h5>
            <p style="font-weight:light; font-size:11px; margin:0%;">Update Data untuk Periode</p>
        </div>
        <hr size="3" width="100%" color="red" class="m-1">
        <div class="tabs">
            <div class="tab-content" id="nav-tabContent">
                <!--Periode-->
                <div class="tab-pane fade show active" id="nav-periode" role="tabpanel" aria-labelledby="nav-periode-tab">
                    <div class="container p-3">
                        <form method="POST" action="/home">
                            <div class="mb-3">
                                <label for="inputRoadmap">Roadmap</label>
                                <input required type="text" class="form-control" id="inputRoadmap" placeholder="Roadmap" name="inputRoadmap" style="width: auto">
                            </div>
                            <div class="mb-3">
                                <label for="tahunAwal">Tahun Awal</label>
                                <input required type="number" class="form-control" id="tahunAwal" placeholder="Tahun Awal" name="tahunAwal" style="width: auto">
                            </div>
                            <div class="mb-3" >
                                <label for="tahunAkhir">Tahun Akhir</label>
                                <input required type="number" class="form-control" id="tahunAkhir" placeholder="Tahun Akhir" name="tahunAkhir" style="width: auto">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
                <!--Goal-->
                <div class="tab-pane fade" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab">
                    <div class="container p-3">
                        <form  method="POST" action="/home">
                            <div class="mb-3" style="display:flex; gap:4%;">
                                <label for="selectPeriode">Periode</label>
                                <select class="form-select " aria-label="Default select example" style="width: auto" name="selectPeriode">
                                    <option selected value="">Pilih Periode</option>
                                    @foreach ($periodes as $period)
                                        <option value="{{$period -> id_periode}}"> {{$period -> roadmap}} ({{$period -> tahun_awal}} - {{$period -> tahun_akhir}}) </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="display:flex; gap:4%;">
                                <label for="inputGoal">Goal</label>
                                <textarea class="form-control " id="inputGoal" aria-label="With textarea" style="width: 80%;" name="inputGoal"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
                <!--Outcomes-->
                <div class="tab-pane fade" id="nav-outcomes" role="tabpanel" aria-labelledby="nav-outcomes-tab">
                    <div class="container p-3">
                        <form  method="POST" action="/home">
                            <div class="mb-3" style="display:flex; gap:5%; clear:both">
                                <label for="selectGoal">Goal</label>
                                <select required class="form-select " aria-label="Default select example" style="width: auto" name="selectGoal" >
                                    <option selected value="">Goal</option>
                                    @foreach ($goals as $goal)
                                        <option value="{{$goal -> id_goal}}"> {{$goal -> strategi_goal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="display:flex; gap:5%;">
                                <label for="inputOutcomes">Outcomes</label>
                                <textarea required class="form-control " id="inputOutcomes" aria-label="With textarea" style="width: 80%;" name="inputOutcomes" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
                <!--Outputs-->
                <div class="tab-pane fade" id="nav-outputs" role="tabpanel" aria-labelledby="nav-outputs-tab">
                    <div class="container p-3">
                        <form  method="POST" action="/home">
                            <div class="mb-3" style="display:flex; gap:5%; clear:both">
                                <label for="selectGoal">Goal</label>
                                <select class="form-select " aria-label="Default select example" style="width: auto" name="selectGoal" >
                                    <option selected value="">Goal</option>
                                    @foreach ($goals as $goal)
                                        <option value="{{$goal -> id_goal}}"> {{$goal -> strategi_goal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="display:flex; gap:5%;">
                                <label for="inputOutputs">Outputs</label>
                                <textarea class="form-control " id="inputOutputs" aria-label="With textarea" style="width: 80%;" name="inputOutputs" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
                <!--Indikator-->
                <div class="tab-pane fade" id="nav-indikator" role="tabpanel" aria-labelledby="nav-indikator-tab">
                    <div class="container p-3">
                        <form method="POST" action="/home">
                            <div class="mb-3" style="display:flex; gap:5%; clear:both">
                                <label for="selectOutcomes">Outcomes</label>
                                <select class="form-select " aria-label="Default select example" style="width: 90%" name="selectOutcomes" >
                                    <option selected value="">Outcomes</option>
                                    @foreach ($outcomes as $outcome)
                                        <option value="{{$outcome -> id_outcomes}}"> {{$outcome -> strategi_outcome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="display:flex; gap:5%; clear:both">
                                <label for="selectOutputs">Outputs</label>
                                <select class="form-select " aria-label="Default select example" style="width: 90%" name="selectOutputs" >
                                    <option selected value="">Outputs</option>
                                    @foreach ($outputs as $output)
                                        <option value="{{$output -> id_outputs}}"> {{$output -> strategi_outputs}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="display:flex; gap:5%;">
                                <label for="inputIndikator">Indikator</label>
                                <textarea class="form-control " id="inputIndikator" aria-label="With textarea" style="width: 90%;" name="inputIndikator" ></textarea>
                            </div>
                            <div class="mb-3" style="display:flex; gap:5%;">
                                <label for="inputIndikatorNumerik">Indikator Numerik</label>
                                <input type="number" class="form-control" id="inputIndikatorNumerik" name="inputIndikatorNumerik" style="width: 90%;">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection