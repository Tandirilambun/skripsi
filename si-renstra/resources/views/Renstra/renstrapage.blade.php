
@extends('main.index')

@section('index')

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session ('success') }}
  </div>
@endif

@if(session()->has('status'))
  <div class="modal fade" tabindex="-1" id="search-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="alert alert-warning m-0" role="alert" style="text-align: center; font-size:1rem; border-radius:0;">
            {{session ('status') }}
          </div>
        </div>
        <div class="modal-footer border-0" style="justify-content: center; align-items: center;">
          <button type="button" class="btn modalBtn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endif

<div class="container py-5">
  <div class="card card-container py-3 shadow-sm" style="border-radius:20px; border-color: transparent;">
    <div class="px-3 mb-2">
        <h5 style="font-weight:bold; font-size:24px;">Goal</h5>
        <p style="font-weight:light; font-size:11px; margin:0%;">Goal untuk periode {{$periodes -> tahun_awal}} - {{$periodes-> tahun_akhir}}</p>
    </div>
    <hr size="3" width="100%" color="black" class="mt-1">
    <div class="row">
      <h5 class="col card-title" style="font-size: 24px; font-weight:bold; text-align:center"> {{$periodes -> strategi_goal}} </h5>
    </div>
  </div>
  <nav class="my-4">
    <div class="nav nav-tabs tabsNav" id="myTab" role="tablist">
        <button class="nav-link active btnNav" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="submit" role="tab" aria-controls="general" aria-selected="false" name="jenis">General Objective</button>
        <button class="nav-link btnNav" id="ultimate-tab" data-bs-toggle="tab" data-bs-target="#ultimate" type="submit" role="tab" aria-controls="ultimate" aria-selected="false" name="jenis">Ultimate Objective</button>
        <button class="nav-link btnNav" id="intermediate-tab" data-bs-toggle="tab" data-bs-target="#intermediate" type="submit" role="tab" aria-controls="intermediate" aria-selected="false" name="jenis">Intermediate Objective</button>
        <button class="nav-link btnNav" id="outcomes-tab" data-bs-toggle="tab" data-bs-target="#outcomes" type="submit" role="tab" aria-controls="outcomes" aria-selected="true">Outcomes</button>
        <button class="nav-link btnNav" id="useofoutput-tab" data-bs-toggle="tab" data-bs-target="#useofoutput" type="submit" role="tab" aria-controls="useofoutput" aria-selected="false" name="jenis">Use of Outputs</button>
        <button class="nav-link btnNav" id="outputs-tab" data-bs-toggle="tab" data-bs-target="#outputs" type="submit" role="tab" aria-controls="outputs" aria-selected="false" name="jenis">Outputs</button>
    </div>
  </nav>
  <div class="tab-content">
    <div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">General Objective</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">General Objective dari </p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($generals) != 0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview" role="tabpanel">
              @foreach($generals as $general)
              <div class="overview-list m-3 border px-3 py-1">
                <div class="row" style="gap:1%">
                  <p class="col m-0 py-3">{{ $general->deskripsi_strategi }}</p>
                  <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                    <a href="/strategi/{{$general -> id_strategi}}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary" role="tabpanel">
              @foreach ($generals as $gen)
                <div class="overview-list m-3 border p-3">
                  {{$gen -> deskripsi_strategi}}
                  <div class="progress_container">
                    <div class="progress">
                        <div class="progress_item px-4">
                            <h3 class="progress_title"></h3>
                            <div class="progress_bar">
                                <div class="bar" data-value="96" data-text="96" data-id={{$gen->id_strategi}}></div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              @endforeach            
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong!!!
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane" id="ultimate" role="tabpanel" aria-labelledby="ultimate-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">Ultimate Objective</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">Ultimate Objective dari </p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($ultimates) != 0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview2" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary2" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview2" role="tabpanel">
              @foreach($ultimates as $ultimate)
                <div class="overview-list m-3 border px-3 py-1">
                  <div class="row" style="gap:1%">
                    <p class="col m-0 py-3">{{ $ultimate->deskripsi_strategi }}</p>
                    <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                      <a href="/strategi/{{ $ultimate -> id_strategi }}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary2" role="tabpanel">
              @foreach($ultimates as $ult)
                <div class="overview-list m-3 border p-3">
                  {{$ult->deskripsi_strategi}}
                  <div class="progress_container">
                    <div class="progress">
                        <div class="progress_item px-4">
                            <h3 class="progress_title"></h3>
                            <div class="progress_bar">
                                <div class="bar" id="bar{{$ult->id_strategi}}" data-value="96" data-text="96" data-id={{$ult->id_strategi}} ></div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong!!!
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane" id="intermediate" role="tabpanel" aria-labelledby="intermediate-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">Intermediate Objective</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">Intermediate Objective dari</p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($intermediates) != 0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview3" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary3" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview3" role="tabpanel">
              @foreach($intermediates as $intermediate)
                <div class="overview-list m-3 border px-3 py-1">
                  <div class="row" style="gap:1%">
                    <p class="col m-0 py-3">{{ $intermediate ->deskripsi_strategi }}</p>
                    <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                      <a href="/strategi/{{ $intermediate -> id_strategi }}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary3" role="tabpanel">
              @foreach($intermediates as $inter)
                <div class="overview-list m-3 border p-3">
                  {{$inter->deskripsi_strategi}}
                  <div class="progress_container">
                    <div class="progress">
                        <div class="progress_item px-4">
                            <h3 class="progress_title"></h3>
                            <div class="progress_bar">
                                <div class="bar" id="bar{{$inter->id_strategi}}" data-value="96" data-text="96" data-id={{$inter->id_strategi}} ></div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong!!!
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane" id="outcomes" role="tabpanel" aria-labelledby="outcomes-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">Outcomes</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">Outcomes dari </p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($outcomes) != 0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview4" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary4" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview4" role="tabpanel">
              @foreach($outcomes as $outcome)
              <div class="overview-list m-3 border px-3 py-1">
                <div class="row" style="gap:1%">
                  <p class="col m-0 py-3">{{ $outcome ->deskripsi_strategi }}</p>
                  <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                    <a href="/strategi/{{ $outcome -> id_strategi }}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary4" role="tabpanel">
              @foreach($outcomes as $out)
              <div class="overview-list m-3 border p-3">
                {{$out->deskripsi_strategi}}
                <div class="progress_container">
                  <div class="progress">
                      <div class="progress_item px-4">
                          <h3 class="progress_title"></h3>
                          <div class="progress_bar">
                              <div class="bar" id="bar{{$out->id_strategi}}" data-value="69" data-text="69" data-id={{$out->id_strategi}} ></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong !!!
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane" id="useofoutput" role="tabpanel" aria-labelledby="useofoutput-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">Use of Output</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">Use of Output dari </p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($useofoutputs) != 0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview5" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary5" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview5" role="tabpanel">
              @foreach($useofoutputs as $useofoutput)
              <div class="overview-list m-3 border px-3 py-1">
                <div class="row" style="gap:1%">
                  <p class="col m-0 py-3">{{ $useofoutput ->deskripsi_strategi }}</p>
                  <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                    <a href="/strategi/{{ $useofoutput -> id_strategi }}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary5" role="tabpanel">
              @foreach ($useofoutputs as $use)    
              <div class="overview-list m-3 border p-3">
                {{$use->deskripsi_strategi}}
                <div class="progress_container">
                  <div class="progress">
                      <div class="progress_item px-4">
                          <h3 class="progress_title"></h3>
                          <div class="progress_bar">
                              <div class="bar" id="bar{{$use->id_strategi}}" data-value="96" data-text="96" data-id={{$use->id_strategi}} ></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong!!!
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="tab-pane" id="outputs" role="tabpanel" aria-labelledby="outputs-tab">
      <div class=" card card-container py-3 shadow-sm" style="border-radius: 20px; border-color: transparent;">
        <div class="px-3">
          <h5 style="font-weight:bold; font-size:24px;">Output</h5>
          <p style="font-weight:light; font-size:11px; margin:0%;">Output dari goal </p>
        </div>
        <hr size="3" width="100%" color="black" class="mt-1">
        <div class="px-4">
          @if(count($outputs) !=  0)
          <nav>
            <div class="nav nav-underline">
              <button class="nav-link active btnNav" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview6" type="button" role="tab" aria-controls="overview" aria-selected="false">Overview</button>
              <button class="nav-link btnNav" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary6" type="button" role="tab" aria-controls="summary" aria-selected="false">Summary</button>
            </div>
          </nav>
          <div class="tab-content">
            <div class="tab-pane active" id="overview6" role="tabpanel">
              @foreach($outputs as $output)
              <div class="overview-list m-3 border px-3 py-1">
                <div class="row" style="gap:1%">
                  <p class="col m-0 py-3">{{ $output ->deskripsi_strategi }}</p>
                  <div class="col btn-action px-0" style="max-width: 10rem; display:flex; align-items:center; justify-content:center; gap:2%;" >
                    <a href="/strategi/{{ $output -> id_strategi }}" class="btn" style="background-color:#0096FF;">
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
            <div class="tab-pane" id="summary6" role="tabpanel">
              @foreach ($outputs as $item)
              <div class="overview-list m-3 border p-3">
                {{$item->deskripsi_strategi}}
                <div class="progress_container">
                  <div class="progress">
                      <div class="progress_item px-4">
                          <h3 class="progress_title"></h3>
                          <div class="progress_bar">
                              <div class="bar" id="bar{{$item->id_strategi}}" data-value="96" data-text="96" data-id={{$item->id_strategi}} ></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @else
          <div class="alert alert-danger m-0" role="alert">
            Kosong!!!
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection