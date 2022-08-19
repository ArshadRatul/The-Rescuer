<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/hospital/theme.css') }}">

<nav class="navbar navbar-dark  navbar-expand-lg  " id="navbar" ">
    <div class="container-fluid">
        <a class="navbar-brand" id="navbarScrollingDropdown" href="{{ url('/redirects') }}">The Rescuer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                {{-- <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                         Hospital
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Get Doctor help</a></li>
                        <li><a class="dropdown-item" href="#">Get Ambulance</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}


                <li class="nav-item">
                    <a class="nav-link active"  id="navbarScrollingDropdown" aria-current="page" href="{{ url('ViewAppointment') }}">View Problems</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  id="navbarScrollingDropdown" aria-current="page" href="{{ url('AddDoctor') }}">Add Doctors</a>
                  </li>
                    @if (Route::has('login'))
    @auth

        <li class="nav-item">
            <x-app-layout>

            </x-app-layout>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="btn" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="btn" href="#">Register</a>
        </li>
        @endif
    @endauth
    </ul>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


<script src="Hospital/js/jquery-3.5.1.min.js"></script>

<script src="Hospital/js/bootstrap.bundle.min.js"></script>


<script src="Hospital/js/theme.js"></script>
