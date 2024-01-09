@extends('layouts.app')

@section('title', $comic['title'])

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>

        <div class="container ">
            <div class="row">
                <div class="col-12 m-4">
                    <div class="d-flex flex-row">
                        <img src="{{ $comic->thumb}}" alt="{{ $comic->series }}" class="big-image">
                        <div class="d-flex flex-column px-4 text-light text-uppercase">
                            <h3>title: {{ $comic->title}}</h3>
                            <h4>description {{ $comic->description }}</h4>
                            <div class="mt-3 d-flex justify-content-between ">
                                <span class="btn btn-primary  p-3">{{ $comic->price }}</span>
                                <span class="d-flex flex-column">data di uscita :
                                    <span>{{ $comic->sale_date }}</span></span>
                            </div>

                        </div>

                    </div>
                </div>
                <a href="{{ route('comics.edit', $comic->id) }}"> <button class="btn btn-success">modifica</button>
                </a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Cancella </button>

                </form>


            </div>


        </div>
        </div>


    </main>
@endsection
