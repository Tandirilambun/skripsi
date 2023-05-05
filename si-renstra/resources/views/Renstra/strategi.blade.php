{{-- @dd(session()->has('success')); --}}
@extends('main.index')

@section('index')
    <div class="container py-5" >
        <!--Section untuk Tabel Roadmap-->
        <div class="card card-container py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:20px;">{{$jenis -> jenis}}</h5>
                <p style="font-weight:light; font-size:11px;">Rencana Strategis Yayasan SATUNAMA Yogyakarta</p>
            </div>
            <div class="container">
                <div style="text-align: center; font-weight:bold; font-size:20px;">
                    {{$strategi -> deskripsi_strategi}}
                </div>
            </div>
        </div>
        <div class="card card-container mt-5 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:20px;"> Capaian Strategi {{$jenis -> jenis}}</h5>
                <p style="font-weight:light; font-size:11px;">Rencana Strategis Yayasan SATUNAMA Yogyakarta</p>
            </div>
            <div class="container">
                <div class="progress_container">
                    <div class="progress">
                        <div class="progress_item">
                            <h3 class="progress_title">Progress Now</h3>
                            <div class="progress_bar">
                                <div class="bar" data-value="{{$avg}}" data-text="{{$avg}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-container mt-5 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:20px;"> Indikator </h5>
                <p style="font-weight:light; font-size:11px;">Indikator yang bersangkutan dengan strategi {{$strategi -> deskripsi_strategi}}</p>
            </div>
            <div class="container">
                @foreach ($indikator as $ind)
                <div class="overview-list m-3 border px-3 py-1">
                    <div class="row" style="gap:1%">
                        <p class="col m-0 py-3">{{$ind -> deskripsi_indikator}}</p>
                        <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                            <a href="/indikator/{{$ind -> id_indikator}}" class="btn" style="background-color:#0096FF;">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#editIndOutcomesModal" style="background-color: #FFBF00">
                                <i class="bi bi-pen"></i>
                            </a>
                            <form action="#" method="post">
                            @method('delete')
                                <button class="btn border-0" style="background-color: #DC143C" onclick="return confirm('Are you sure?')"> 
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
