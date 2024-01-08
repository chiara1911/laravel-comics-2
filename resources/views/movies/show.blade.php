@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 m-4">
                    <div class="d-flex flex-row">
                        <img src="{{ $movie['thumb'] }}" alt="{{ $movie['series'] }}" class="big-image">
                        <div class="d-flex flex-column px-4 text-uppercase opacity-75 ">
                            <h3 class="text-light"> title :{{ $movie['title'] }}</h3>
                            <h4 class="text-light">description : {{ $movie['description'] }}</h4>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-primary  p-3">{{ $movie['price'] }}</span>
                                <div class="d-flex flex-column text-light">
                                    <span class="d-flex flex-column">data di uscita :</span>
                                        <span>{{ $movie['sale_date'] }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
