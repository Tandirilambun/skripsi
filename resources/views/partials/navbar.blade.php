<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background: white; ">
  <div class="container-fluid">
      <img src="{{ asset('img/Logo_SN_Text.png') }}" alt="My Image" style="width:75px; height:75px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="width:100%; justify-content:center; column-gap: 2%">
        <a class="btn navigateBtn p-0 d-flex" aria-current="page" href="/home" style="background-color: transparent; border:none; color:black; align-items:center; width:10rem">
          <li class="nav-item p-2" style="width: 100%">
            <i class="bi bi-house-door"></i>
            <p class="m-0">Home</p> 
          </li>
        </a>
        <a class="btn navigateBtn p-0 d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; border:none; color:black; align-items:center; width:10rem">
          <li class="nav-item p-2" style="width: 100%">
            <i class="bi bi-file-earmark-diff"></i>
            <p class="m-0">Tambah Data</p> 
          </li>
        </a>
      </ul>
    </div>
  </div>
</nav>
