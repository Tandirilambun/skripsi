<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SATUNAMA | Rencana Strategis</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        <!-- Web Icon -->
        <link rel="icon" type="png" href="{{ asset('img/Logo_SN_Text.png') }}">
        
        <!-- Local CSS -->
        <link rel="stylesheet" href="/css/index.css">
        
        <!-- Bootstrap 5.3.0 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <!-- Google Poppins Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap">
        
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <!-- Bootstrap Poopper JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <!-- Bootstrap 5.3.0 js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        
        <!-- Jquery for Ajax -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        
        <!-- Ajax jquery for searching -->
        {{-- <script>
            var availableTags = [];
            $.ajax({
                type: "GET",
                url: "/indikator-list",
                success: function (response) {
                    startAutoComplete(response)
                }
            });
            function startAutoComplete(availableTags) { 
                $("#search-item" ).autocomplete({
                    source: availableTags
                });
            }
        </script> --}}
    </head>

    @if(session()->has('success'))
        <body onload="toasty()" style="background: #F8FAFB;">
            @include('partials.navbar')
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width: 50%; border-radius:20px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col" >
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="home/create" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold; color:black;">Tambah Data Rencana Strategis</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="/crudrenstra" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold;">Tambah Data Rencana Kegiatan</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col" >
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="/crudrenstra" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold;">Tambah Data Evaluasi Kegiatan</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @yield('index')
            </div>
        </body>
    @else
        <body style="background: #F8FAFB;">
            @include('partials.navbar')  
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" style="max-width: 50%; border-radius:20px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col" >
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="home/create" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold;">Tambah Data Rencana Strategis</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="/crudrenstra" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold;">Tambah Data Rencana Kegiatan</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col" >
                                        <div class="card card-wrapper my-2" style="border: 2px dashed #d2d2d2; border-radius:15px; width:auto; height:auto;">
                                            <a href="/crudrenstra" class="card-body card-self py-5" style="border-radius:15px; width:auto; height:auto; text-decoration: none;">
                                                <h5 class="card-title" style="font-size: 20px; font-weight:bold;">Tambah Data Evaluasi Kegiatan</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @yield('index')
            </div>
        </body>
    @endif
    <!-- Local JavaScript -->
    <script src="/js/index.js"></script>
</html>
