@extends('layouts.main')

@section('contain')

<div class="container text-white">

    <div class="text-center">
        <h2>Modifica il tuo comic</h2>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Torna al comic</a>
        <a href="{{ route('comics.index') }}" class="btn btn-primary text-end">Torna alla lista</a>
    </div>

    <div class="form-comic my-5">

        <!-- alert validatore -->
        @if($errors->any())
        <div class="alert alert-danger bg-danger text-white">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Titolo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <label for="description">Descrizione</label>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" id="description" name="description">{{ $comic->description }}</textarea>
            </div>

            <label for="thumb">Aggiungi url immagine copertina</label>
            <div class="input-group mb-3">
                <input type="url" class="form-control" id="serie" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <label for="series" class="form-label">Serie</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="serie" name="series" value="{{ $comic->series }}">
            </div>

            <label for="price">Prezzo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" value="{{ $comic->price }}">
            </div>

            <label for="sale_date">Data</label>
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <label for="type">Tipo</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-lg btn-secondary">Aggiorna modifiche</button>
            </div>
        </form>
    </div>

</div>

@endsection