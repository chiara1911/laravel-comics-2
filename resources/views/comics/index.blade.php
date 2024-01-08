@extends('layouts.app')

@section('title', 'Comics')

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>

        <div class="container">

            <h2 class="text-light">DC COMICS</h2>
            <div class="row">
                @foreach ($comics as $key =>$comic)
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card-wrapper">
                            <div class="img-card overflow-hidden">
                                <a href="{{ route ('comics.show', $key)}}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
                            </div>

                            <span
                                class="p-2 d-flex flex-wrap align-content-center text-light text-uppercase">{{ $comic['title'] }}</span>

                        </div>


                    </div>
                @endforeach

            </div>
        </div>

        <div id="bottom-main" class=" bg-primary">
            <div class="container">
                <ul class="d-flex flex-row justify-content-between m-0 p-2">
                    @foreach ($items as $item)
                        <li class="p-1 text-light text-uppercase d-flex flex-row">
                            <a href="#"><img src="{{ Vite::asset($item['img']) }}" alt=""
                                    class="shop-img" /></a>
                            <span class="p-2 d-flex flex-wrap align-content-center">
                                {{ $item['text'] }}
                            </span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </main>
@endsection
