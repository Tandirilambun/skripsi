{{-- @dump($periodes); --}}
@extends('main.index')

@section('index')

<div class="container py-5">
    <nav class="mb-4">
        <div class="nav nav-tabs tabsNav" id="nav-tab" role="tablist">
            <button class="nav-link active btnNav" id="nav-goal-tab" data-bs-toggle="tab" data-bs-target="#nav-goal" type="button" role="tab" aria-controls="nav-goal" aria-selected="false">Goal/Periode</button>
            <button class="nav-link btnNav" id="nav-outcomes-tab" data-bs-toggle="tab" data-bs-target="#nav-outcomes" type="button" role="tab" aria-controls="nav-outcomes" aria-selected="false">Form 4 Tingkat</button>
            <button class="nav-link btnNav" id="nav-outputs-tab" data-bs-toggle="tab" data-bs-target="#nav-outputs" type="button" role="tab" aria-controls="nav-outputs" aria-selected="false">Form 8 Tingkat</button>
            <button class="nav-link btnNav" id="nav-indikator-tab" data-bs-toggle="tab" data-bs-target="#nav-indikator" type="button" role="tab" aria-controls="nav-indikator" aria-selected="false">Indikator</button>
        </div>
    </nav>
    <div class="card card-container shadow-sm" style="border-radius:15px; border-color: transparent;">
        <div class="px-3 py-2">
            <h5 style="font-weight:bold; font-size:24px;">Tambah Data Rencana Strategis</h5>
            <p style="font-weight:light; font-size:11px; margin:0%;">Tambah Data untuk Periode</p>
        </div>
        <hr size="3" width="100%" color="red" class="m-1">
        <div class="tabs">
            <div class="tab-content" id="nav-tabContent">
                <!--Goal/Periode-->
                <div class="tab-pane fade show active" id="nav-goal" role="tabpanel" aria-labelledby="nav-goal-tab">
                    <div class="container p-3">
                        <form  method="POST" action="/goal">
                            <div class="mb-3">
                                <label for="inputRoadmap">Roadmap</label>
                                <input required type="text" class="form-control" id="inputRoadmap" placeholder="Roadmap" name="inputRoadmap" style="width: auto">
                            </div>
                            <div class="mb-3">
                                <label for="tahunAwal">Tahun Awal</label>
                                <input required type="number" class="form-control" id="tahunAwal" placeholder="Tahun Awal" name="tahunAwal" style="width: auto">
                            </div>
                            <div class="mb-3">
                                <label for="tahunAkhir">Tahun Akhir</label>
                                <input required type="number" class="form-control" id="tahunAkhir" placeholder="Tahun Akhir" name="tahunAkhir" style="width: auto">
                            </div>
                            <div class="mb-3">
                                <label for="inputGoal">Goal</label>
                                <textarea required class="form-control " id="inputGoal" aria-label="With textarea" style="width: 80%;" name="inputGoal"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btnAdd" style="border-radius: 3px 3px 15px 15px;">
                                <i class="bi bi-plus-square-dotted crtAdd"></i>Add Data
                            </button>
                        </form>
                    </div>
                </div>
                <!--Strategi-->
                <div class="tab-pane fade" id="nav-outcomes" role="tabpanel" aria-labelledby="nav-outcomes-tab">
                    <div class="container p-3">
                        <form  method="POST" action="#">
                            <div class="mb-3 d-flex" style="gap: 3%;">
                                <label for="selectJenis">I dont Know What is this idiot name</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" style="max-width:auto; width:auto;">
                                    @foreach ($jenis as $item)                                      
                                        <option value={{$item -> id_jenis}}>{{$item -> jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputRoadmap">Roadmap</label>
                                <input required type="text" class="form-control" id="inputRoadmap" placeholder="Roadmap" name="inputRoadmap" style="width: auto">
                            </div>
                        </form>
                    </div>
                </div>
                <!--Outputs-->
                <div class="tab-pane fade" id="nav-outputs" role="tabpanel" aria-labelledby="nav-outputs-tab">
                    <div class="container p-3">
                        <form  method="POST" action="#">
                        </form>
                    </div>
                </div>
                <!--Indikator-->
                <div class="tab-pane fade" id="nav-indikator" role="tabpanel" aria-labelledby="nav-indikator-tab">
                    <div class="container p-3">
                        <form method="POST" action="#">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection