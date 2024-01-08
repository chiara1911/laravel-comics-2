@extends('layouts.app')

@section('title', 'Movies')

@section('content')

    {{-- @php
        $items = config('items.items');
    @endphp --}}
    <main>

        <div class="container">

            <h2 class="text-light">Movies</h2>
            <div class="row">
                @foreach ($movies as $key => $movie)
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card-wrapper">
                            <div class="img-card overflow-hidden">
                                <a href="{{ route ('movies.show', $key)}}"><img src="{{ $movie['thumb'] }}" alt="{{ $movie['series'] }}"></a>
                                <img src="{{ $movie['thumb'] }}" alt="{{ $movie['series'] }}">
                            </div>

                             <span
                                class="p-2 d-flex flex-wrap align-content-center text-light text-uppercase">{{ $movie['title'] }}</span>

                        </div>


                    </div>
                @endforeach

            </div>
        </div>


    </main>
@endsection
