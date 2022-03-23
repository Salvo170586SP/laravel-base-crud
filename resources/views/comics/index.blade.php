@extends('layouts.main')

@section('contain')

<div class="container">
    <div class="title-comics d-flex justify-content-between align-item-center">
        <h2>Comics</h2>
        <a class="btn btn-primary mb-5" href="{{ route('comics.create') }}">AGGIUNGI NUOVO COMIC</a>
    </div>

    <!-- alert messaggio di eliminazione comic -->
    @if(session('message'))
    <div class="alert alert-danger bg-danger text-white">
        {{ session('message')}}
    </div>
    @endif


    <div class="row align-items-end g-3">
        @foreach($comics as $comic)
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                    <h5>{{$comic->title}}</h5>
                    <p class="card-text">{{ $comic->series}}</p>
                    <p class="card-text"> € {{ $comic->price}}</p>
                    <p class="card-text">{{ $comic->type}}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('comics.show', $comic->id ) }}" class="btn btn-primary">Visualizza dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id ) }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('comics.destroy', $comic->id)}}" class="delete-form" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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