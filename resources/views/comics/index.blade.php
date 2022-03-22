@extends('layouts.main')

@section('contain')

<div class="container">
    <div class="title-comics d-flex justify-content-between align-item-center">
        <h2>Qui la lista dei comics</h2>
        <a class="btn btn-primary mb-5" href="{{ route('comics.create') }}">AGGIUNGI NUOVO COMIC</a>
    </div>
    <ul>
        @foreach($comics as $comic)
        <li> <h2>{{ $comic->title }}</h2></li>
        <li><p>{{ $comic->description }}</p></li>
        <li><img src="{{ $comic->thumb }}" alt="$comic->title"> </li>
        <li><p>{{ $comic->series }}</p></li>
        <li><span>{{ $comic->price }}</span></li>
        <li><span>{{ $comic->sale_date }}</span></li>
        <li><p>{{ $comic->type }}</p></li>
        <li><a href="{{ route('comics.show', $comic->id ) }}">visualizza dettagli comic</a></li>

        @endforeach
    </ul>

</div>

@endsection