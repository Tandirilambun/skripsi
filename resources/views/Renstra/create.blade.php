{{-- @dump($periodes); --}}
@extends('main.index')

@section('index')
    <div class="container py-5">
        <nav class="mb-4">
            <div class="nav nav-tabs tabsNav" id="nav-tab" role="tablist">
                <button class="nav-link active btnNav" id="nav-goal-tab" data-bs-toggle="tab" data-bs-target="#nav-goal"
                    type="button" role="tab" aria-controls="nav-goal" aria-selected="false">Goal/Periode</button>
                <button class="nav-link btnNav" id="nav-strategi-tab" data-bs-toggle="tab" data-bs-target="#nav-strategi"
                    type="button" role="tab" aria-controls="nav-strategi" aria-selected="false">Strategi</button>
                <button class="nav-link btnNav" id="nav-indikator-tab" data-bs-toggle="tab" data-bs-target="#nav-indikator"
                    type="button" role="tab" aria-controls="nav-indikator" aria-selected="false">Indikator</button>
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
                            <form method="POST" action="/goal">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputRoadmap">Roadmap</label>
                                    <input required type="text" class="form-control" id="inputRoadmap"
                                        placeholder="Roadmap" name="inputRoadmap" style="width: auto">
                                </div>
                                <div class="mb-3">
                                    <label for="tahunAwal">Tahun Awal</label>
                                    <input required type="number" class="form-control" id="tahunAwal"
                                        placeholder="Tahun Awal" name="tahunAwal" style="width: auto">
                                </div>
                                <div class="mb-3">
                                    <label for="tahunAkhir">Tahun Akhir</label>
                                    <input required type="number" class="form-control" id="tahunAkhir"
                                        placeholder="Tahun Akhir" name="tahunAkhir" style="width: auto">
                                </div>
                                <div class="mb-3">
                                    <label for="inputGoal">Goal</label>
                                    <textarea class="form-control " id="inputGoal" aria-label="With textarea" style="width: 80%;" name="inputGoal"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btnAdd"
                                    style="border-radius: 3px 3px 15px 15px;">
                                    <i class="bi bi-plus-square-dotted crtAdd"></i>Add Data
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--Strategi-->
                    <div class="tab-pane fade" id="nav-strategi" role="tabpanel" aria-labelledby="nav-strategi-tab">
                        <div class="container p-3">
                            <form method="POST" action="/strategi">
                                @csrf
                                <div class="mb-3">
                                    <label for="selectJenis">Periode</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example"
                                        style="max-width:auto; width:auto;" name="selectPeriode">
                                        <option selected value="">Select Goal...</option>
                                        @foreach ($goals as $goal)
                                            <option value={{ $goal -> id_goal }}>{{ $goal->roadmap }} ({{$goal -> tahun_awal}} - {{$goal -> tahun_akhir}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="selectJenis">I dont Know What is this idiot name</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example"
                                        style="max-width:auto; width:auto;" name="selectJenis">
                                        <option selected value="">Select Jenis...</option>
                                        @foreach ($jenis as $item)
                                            <option value={{ $item->id_jenis }}>{{ $item->jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputStrategi">Strategi</label>
                                    <textarea class="form-control " id="inputStrategi" aria-label="With textarea" style="width: 80%;" name="inputStrategi" placeholder="Masukkan Strategi..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btnAdd"
                                    style="border-radius: 3px 3px 15px 15px;">
                                    <i class="bi bi-plus-square-dotted crtAdd"></i>Add Data
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--Indikator-->
                    <div class="tab-pane fade" id="nav-indikator" role="tabpanel" aria-labelledby="nav-indikator-tab">
                        <div class="container p-3">
                            <form method="POST" action="/indikator">
                                @csrf
                                <div class="mb-3 selectedStrategi" >
                                    <label class="mb-1" for="selectStrategi">Strategi</label>
                                    <select class="form-select mb-3 js-example-basic-single" aria-label=".form-select-lg example"
                                        style="max-width:auto; width:auto;" name="selectStrategi">
                                        <option selected value="">Select Strategi...</option>
                                        @foreach ($strategis as $strategi)
                                            <option value={{ $strategi->id_strategi }}>{{ $strategi->deskripsi_strategi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputIndikator">Indikator</label>
                                    <textarea class="form-control " id="inputIndikator" aria-label="With textarea" style="width: 80%;" name="inputIndikator" placeholder="Masukkan Indikator..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btnAdd"
                                    style="border-radius: 3px 3px 15px 15px;">
                                    <i class="bi bi-plus-square-dotted crtAdd"></i>Add Data
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
