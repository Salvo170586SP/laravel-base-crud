@extends('layouts.main')

@section('contain')

<div class="container">
    <div class="title-comics d-flex justify-content-between align-item-center">
        <h2>Comics</h2>
        <a class="btn btn-primary mb-5" href="{{ route('comics.create') }}">AGGIUNGI NUOVO COMIC</a>
    </div>
    <div class="row g-3">
        @foreach($comics as $comic)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{ $comic->series}}</p>
                    <p class="card-text">{{ $comic->price}}</p>
                    <p class="card-text">{{ $comic->sale_date}}</p>
                    <p class="card-text">{{ $comic->type}}</p>
                    <a href="{{ route('comics.show', $comic->id ) }}" class="btn btn-primary">Visualizza dettagli</a>
                </div>
            </div>
        </div>
            @endforeach

    </div>

</div>

@endsection