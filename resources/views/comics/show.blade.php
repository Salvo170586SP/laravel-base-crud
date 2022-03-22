@extends('layouts.main')

@section('contain')

<div class="container">
    <h2>Dettagli</h2>

    <div class="row g-3">
        <div class="col-12">
            <div class="bg-white d-flex shadow">
                    <img src="{{ $comic->thumb }}" class="img-fluids" width="300" alt="{{$comic->title}}">
                <div class="card-body w-75">
                    <h2 class="card-title">{{$comic->title}}</h2>
                    <p class="card-text">{{ $comic->series}}</p>
                    <p class="card-text"><span class="fw-bold">Prezzo:</span> {{ $comic->price}}</p>
                    <p class="card-text"><span class="fw-bold">Data:</span> {{ $comic->sale_date}}</p>
                    <p class="card-text"><span class="fw-bold">Tipo:</span>  {{ $comic->type}}</p>
                    <p class="card-text"><span class="fw-bold">Trama:</span>  {{ $comic->description}}</p>
                    <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna alla lista</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection