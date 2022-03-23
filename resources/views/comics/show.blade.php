@extends('layouts.main')

@section('contain')



<div class="container">
    <div class="row g-3">
        <div class="col-12">
            <div class="bg-white d-flex shadow">
                <img src="{{ $comic->thumb }}" class="img-fluids" width="300" alt="{{$comic->title}}">
                <div class="card-body w-75">
                    <div class=" d-flex justify-content-end">
                        <a href="{{ route('comics.edit', $comic->id ) }}" class="btn btn-secondary me-3"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('comics.destroy', $comic->id)}}" class="delete-form" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>

                    <h2 class="card-title">{{$comic->title}}</h2>
                    <p class="card-text">{{ $comic->series}}</p>
                    <p class="card-text"><span class="fw-bold">Prezzo:</span> {{ $comic->price}}</p>
                    <p class="card-text"><span class="fw-bold">Data:</span> {{ $comic->sale_date}}</p>
                    <p class="card-text"><span class="fw-bold">Tipo:</span> {{ $comic->type}}</p>
                    <p class="card-text"><span class="fw-bold">Trama:</span> {{ $comic->description}}</p>
                    <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna alla lista</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


<!-- script per conferma eliminazione comic -->
@section('other-script')
<script>
    const deleteForm = document.querySelectorAll('.delete-form');
    deleteForm.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const accept = confirm(`Vuoi eliminare questo comic?`);
            if (accept) {
                e.target.submit();
            }
        })
    })
</script>
@endsection