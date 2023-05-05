{{-- @dd($periodes); --}}
@extends('main.index')

@section('index')
    <button  type="button" class="btn btn-primary" id="liveToastBtn" onclick="toasty()">Show live toast for testing</button>
    <div class="container py-5" >
        <div class="card card-container py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="px-3">
                <h5 style="font-weight:bold; font-size:24px;">Strategic Planning</h5>
                <p style="font-weight:light; font-size:11px;">Rencana Strategis Yayasan SATUNAMA Yogyakarta</p>
            </div>
            <hr size="3" width="100%" color="black" class="mt-1">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 container">
                    @foreach ($periodes as $periode)
                    <div class="col">
                        <div class="card card-parent my-2 shadow-sm" style="border:2px dashed #d2d2d2; border-radius:15px; width:18; height:13rem;">
                            <a href="/renstrapage/{{ $periode -> id_goal }}" class="card-body card-self d-flex" style="border-radius:15px; width:auto; height:auto; text-decoration: none; align-items:center">
                                <div>    
                                    <h5 class="card-title" style="font-size: 24px; font-weight:bold;">{{$periode -> roadmap}}</h5>
                                    <h6 class="card-subtitle mb-2" style="font-size: 13px;">SP SATUNAMA</h6>
                                    <p class="card-text" style="font-size: 13px;">Periode {{$periode -> tahun_awal}} - {{$periode -> tahun_akhir}} </p>
                                </div>
                            </a>
                        </div>
                    </div>    
                    @endforeach
                </div>
                {{-- <div class="d-flex justify-content-center">
                    {{ $goals -> links()}}
                </div> --}}
            </div>
        </div>
        {{-- <!--Section untuk Departemen/Unit-->
        <div class="card card-container mt-3 py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
            <div class="container">
                <div id="carouselExampleControlsNoTouching" class="carousel carousel-dark slide" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center" style="align-items: center">
                                <i class="bi bi-building" style="font-size: 4rem;"></i>
                            </div>
                            <div class="d-flex justify-content-center" style="align-items: center">
                                <hr size="4" width="100%" color="black" class="mt-1">
                                <h3 class="dept-unit mx-4"> Departemen </h3>
                                <hr size="4" width="100%" color="black" class="mt-1">
                            </div>
                            <div class="row container row-cols-1 row-cols-md-4 px-3 m-0">
                                @foreach ($departemens as $departemen)
                                <div class="col p-0" style="display: flex; align-items:center; justify-content:center;">
                                    <div class="card card-parent my-2 shadow-sm" style=" border-radius: 15px; border:2px dashed #d2d2d2; width: 18rem; height: 9rem">
                                        <a class="card-body card-departemen d-flex" href="/departemen/{{ $departemen -> id_departemen }}" style="border-radius: 15px; text-decoration: none; width: auto; height: auto; align-items:center">
                                            <div>
                                                <p class="card-text paragraph my-3">{{ $departemen -> nama_departemen }} </p>
                                            </div>
                                        </a> 
                                    </div>                      
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center" style="align-items: center">
                                <i class="bi bi-people-fill" style="font-size: 4rem"></i>
                            </div>
                            <div class="d-flex justify-content-center" style="align-items: center">
                                <hr size="4" width="100%" color="black" class="mt-1">
                                <h3 class="dept-unit mx-4"> Unit </h3>
                                <hr size="4" width="100%" color="black" class="mt-1">
                            </div>
                            <div class="row container row-cols-1 row-cols-md-4 px-3 m-0">
                                @foreach ($units as $unit)
                                    <div class="col p-0" style="display: flex; align-items:center; justify-content:center;">
                                        <a class="card my-2 card-departemen shadow-sm" href="/unit/{{ $unit -> id_unit }}" style="border-radius: 15px; text-decoration: none; border: 2px dashed #d2d2d2; width: 18rem; height: 9rem">
                                            <div class="card-body" style="display: flex; align-items:center;">
                                                <p class="card-text paragraph my-3">{{ $unit -> nama_unit }} </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev" style="justify-content: start; justify-items:start; max-width:2rem;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" style="justify-content: end; justify-items: end; max-width:2rem">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div> --}}
        <!--Toast for Notification-->
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="img/Logo_SN_noText.png" class="rounded me-2" alt="logo sistem" style="width:18px; height:18px" >
                    <strong class="me-auto">Notification</strong>
                    <small> {{now()->diffForHumans()}} </small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body px-0">
                    <div class="body-time mb-3 mx-3" style="text-align:start">
                        <small>{{now() -> format('l') }}, {{now() -> format('d F Y') }} ({{now() -> format('H:i') }})</small>
                    </div>
                    <div class="body-message alert alert-info mb-0" role="alert" style="border-radius: 0; border:0;">
                        <div style="display: inline; font-size: 12px">
                            <i class="bi bi-check2-circle" style="margin-right: 1rem"></i>{{ session ('success') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
