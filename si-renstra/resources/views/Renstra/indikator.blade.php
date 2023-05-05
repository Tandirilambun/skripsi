{{-- @dd($departemens); --}}

@extends('main.index')

@section('index')
    <div class="container py-5">
        <div class="card card-container mt-3 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:24px;">Indikator</h5>
                <p style="font-weight:light; font-size:11px; margin:0%;">Rincian capaian dari indikator</p>
            </div>
            <hr size="3" width="100%" color="black" class="mt-1">
            <div style="text-align: center; font-weight:bold; font-size:17px;">
                {{$indikator -> deskripsi_indikator}}
            </div>
        </div>
        <div class="card card-container mt-5 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:24px;">Capaian</h5>
                <p style="font-weight:light; font-size:11px; margin:0%;">Capaian dari indikator</p>
            </div>
            <hr size="3" width="100%" color="black" class="mt-1">
            <div class="container">
                @if (count($capaians) != 0)
                <h5 class="card-title ind-title mb-3" style="font-size: 20px; font-weight:bold;">Overall Progress</h5>
                <div class="col card shadow-sm m-3" style=" width:auto; border-color: transparent;">
                    <div class="card-body" id="card-body">
                        <div class="container">
                            <div class="progress_container">
                                <div class="progress">
                                    <div class="progress_item">
                                        <h3 class="progress_title"></h3>
                                        <div class="progress_bar">
                                            <div class="bar" data-value="{{$avg_capaian}}" data-text="{{$avg_capaian}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="card-title ind-title mb-3" style="font-size: 20px; font-weight:bold;">Rincian Progress</h5>
                <div class="row chart mx-3 mb-2" >
                    @foreach ($capaians as $capaian)
                    <div class="col card shadow-sm" style=" width:auto; border-color: transparent;">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title ind-title">Tahun {{$capaian -> tahun}}</h5>
                            <!--Circular Progress Bar-->
                            <div class="container container-chart" style="display: flex; justify-content:center; align-items:center;">
                                <div class="circular-progress" id="circular-progress-{{$capaian -> id_capaian}}" data-id={{$capaian -> id_capaian}} >
                                    <div class="value-container" id="value-container-{{$capaian -> id_capaian}}" data-id={{$capaian -> id_capaian}} > {{$capaian -> capaian}} </div>
                                </div>
                            </div>
                            <!--Detail Information-->
                            <div style="display: flex; justify-content:center; align-items:center;">
                                <ul class="details">
                                    <li>
                                        <div>
                                            {{-- <h5 class="detailInfo"> {{$percentage}}% </h5> --}}
                                            <h5 class="detailInfo"> {{ $capaian -> capaian }}% </h5>
                                            <h6 class="detailInfo"> Capaian </h6>
                                        </div>
                                    </li>
                                    <li><div class="divider-line"></div></li>
                                    <li>
                                        <div>
                                            {{-- <h5 class="detailInfo"> {{$deviasi}}% </h5> --}}
                                            <h5 class="detailInfo"> {{ 100 - ($capaian -> capaian)  }}% </h5>
                                            <h6 class="detailInfo"> Deviasi </h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn btn-details" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-placement="bottom" data-bs-title="What Happend in {{ $capaian -> tahun }}" data-bs-content="{{$capaian -> hasil}}">See What Happend</i></button>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="alert alert-danger" role="alert">
                    Kosong!!!
                </div>
                @endif
            </div>
        </div>
        <div class="card card-container mt-3 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:24px;">Kegiatan</h5>
                <p style="font-weight:light; font-size:11px; margin:0%;">Rincian Kegiatan yang berkaitan dengan Renstra</p>
            </div>
            <hr size="3" width="100%" color="black" class="mt-1">
            <div class="px-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kegiatan</th>
                            <th>Hasil Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>sndiawndiondfopasnids</td>
                            <td>asjdboiasbiabsidbasub</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection