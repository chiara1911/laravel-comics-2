@extends('layouts.app')

@section('title', 'create')

@section('content')

    @php
        $items = config('items.items');
    @endphp
    <main>
        {{-- creo un form che mi salva i dati di questa pagina, nella route per salvare che è comics.store mettendo il metodo post --}}

        <section class="mx-5 pt-4">


            <form action="{{ route('comics.store') }}" method="POST">

                @csrf {{-- <-- token , va messo sempre ogni volta che abbiamo un form per ragioni di sicurezza (cioè vengono da una pagina del nostro sito) --}}
                <input type="text" id="title" name="title" placeholder="inserisci un titolo" class="form-control mt-2">
                <textarea class="form-control mt-2" type="text" id="description" name="description"
                    placeholder="inserisci una descrizione" rows="4"></textarea>

                <input type="text" id="thumb" name="thumb" placeholder="inserisci un'immagine"
                    class="form-control mt-2 w-50">
                    <input type="text" id="price" name="price" placeholder="inserisci il prezzo"
                    class="form-control mt-2 w-25">
                <input type="text" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita"
                    class="form-control mt-2 w-25">
                <input type="text" id="series" name="series" placeholder="inserisci una serie"
                    class="form-control mt-2 w-25">
                    <select class="form-select w-25" name="type" id="type" aria-label="Default select example">
                        <option selected>Seleziona la tipo</option>
                        <option value="">All</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                      </select>
                <button type="submit" class="mt-4 btn btn-success">Invia

                </button>
            </form>

        </section>

    </main>
@endsection
