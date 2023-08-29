@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Modifica Comic</a>
            </div>
            <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
            <p><strong>Prezzo:</strong> {{ $comic->price }}</p>
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Uscita in sala:</strong> {{ $comic->sale_date }}</p>
            <p><strong>Tipo:</strong> {{ $comic->type }}</p>
            <p><strong>Artisti:</strong> {{ implode(', ', $comic->artists) }}</p>
            <p><strong>Scrittori:</strong> {{ implode(', ', $comic->writers) }}</p>
        </div>
    </div>
    <form method="POST" action="{{ route('comics.destroy', $comic) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Cancella Comic</button>
    </form>
    </div>
@endsection
