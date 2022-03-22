@extends('layouts.main')

@section('contain')

<div class="container">
    <h2>Dettagli</h2>

    <ul>
        <li> <h2>{{ $comic->title }}</h2></li>
        <li><p>{{ $comic->description }}</p></li>
        <li><img src="{{ $comic->thumb }}" alt="$comic->title"> </li>
        <li><p>{{ $comic->series }}</p></li>
        <li><span>{{ $comic->price }}</span></li>
        <li><span>{{ $comic->sale_date }}</span></li>
        <li><p>{{ $comic->type }}</p></li>
    </ul>

</div>

@endsection