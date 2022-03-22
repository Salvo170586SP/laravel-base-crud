@extends('layouts.main')

@section('contain')

<div class="container">

    <h2>Aggiungi dati del tuo comic</h2>
    <div class="form-comic my-5">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <label for="title">Titolo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control"  id="title" name="title">
            </div>

            <label for="description">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" id="description" name="description"></textarea>
            </div>

            <label for="thumb">Aggiungi url immagine copertina</label>
            <div class="input-group mb-3">
                <input type="url" class="form-control" id="serie" name="thumb">
            </div>

            <label for="series" class="form-label">Serie</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="serie" name="series">
            </div>

            <label for="price">Prezzo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
            </div>

            <label for="sale_date">Data</label>
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="sale_date">
            </div>

            <label for="type">Tipo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>

</div>

@endsection