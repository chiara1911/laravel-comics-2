@php
    $data = config('nav.navLinks');
@endphp
<header>
    <div class="container mt-1 d-flex justify-content-between">
            <a href="{{('/')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo"></a>
        <nav class="navbar navbar-expand-lg navbar-light mx-5 ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-uppercase ">
                    @foreach ($data as $navLink)
                        <li class="nav-item ">
                            <a class="nav-link" href="{{$navLink}}"> {{ $navLink }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div class="input-group mx-5">
            <div class="form-outline" data-mdb-input-init>
                <input type="search" class="form-control" />
                <label class="form-label" for="form1">Search</label>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div id="hero-img"></div>

</header>
