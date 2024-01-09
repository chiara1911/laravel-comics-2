@extends('layouts.app')

@section('title', 'Edit:'.$comic->title)

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>
        {{-- creo un form che mi salva i dati di questa pagina, nella route per salvare che è comics.store mettendo il metodo post --}}

        <section class="mx-5 pt-4">


            <form action="{{ route('comics.update' , $comic->id) }}" method="POST">

                @csrf {{-- <-- token , va messo sempre ogni volta che abbiamo un form per ragioni di sicurezza (cioè vengono da una pagina del nostro sito) --}}
                @method('PUT')
                <input type="text" value="{{old('title', $comic->title)}}" id="title" name="title" placeholder="inserisci un titolo" class="form-control mt-2">
                <textarea class="form-control mt-2" type="text" value="{{old('description', $comic->description)}}"id="description" name="description"
                    placeholder="inserisci una descrizione" rows="4"></textarea>

                <input type="text" id="thumb" name="thumb" placeholder="inserisci un'immagine" value="{{old('thumb', $comic->thumb)}}"
                    class="form-control mt-2 w-50">
                    <input type="text" id="price" name="price" value="{{old('price', $comic->price)}}"placeholder="inserisci il prezzo"
                    class="form-control mt-2 w-25">
                <input type="text" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" value="{{old('sale_date', $comic->sale_date)}}"
                    class="form-control mt-2 w-25">
                <input type="text" id="series" name="series" placeholder="inserisci una serie" value="{{old('series', $comic->series)}}"
                    class="form-control mt-2 w-25">
                    <input type="text" id="type" name="type" placeholder="inserisci un tipo" value="{{old('type', $comic->type)}}"
                    class="form-control mt-2 w-25">
                <button type="submit" class="mt-4 btn btn-success">Invia

                </button>
            </form>

        </section>

    </main>
@endsection
