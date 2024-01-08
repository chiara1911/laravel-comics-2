@extends('layouts.app')

@section('title', 'create')

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>
{{-- creo un form che mi salva i dati di questa pagina, nella route per salvare che è comics.store mettendo il metodo post--}}


<form action="{{ route('comics.store') }}" method="POST">

            @csrf  {{-- <-- token , va messo sempre ogni volta che abbiamo un form per ragioni di sicurezza (cioè vengono da una pagina del nostro sito)--}}
            <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control">
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione"
                class="form-control">
            <input type="text" id="price" name="price" placeholder="inserisci un prezzo" class="form-control">
            <input type="text" id="type" name="type" placeholder="inserisci un tipo" class="form-control">
            <button type="submit">Invia

            </button>
        </form>


    </main>
@endsection
