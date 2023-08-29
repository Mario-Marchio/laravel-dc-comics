@extends('layout')

@section('content')
    <div class="container">
        <h1>Modifica Comic</h1>
        <form method="POST" action="{{ route('comics.update', $comic) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">URL foto</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                    required>
            </div>
            <div class="form-group">
                <label for="price">Priezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"
                    required>
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                    required>
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ \Carbon\Carbon::parse($comic->sale_date)->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                    required>
            </div>
            <div class="form-group">
                <label for="artists">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists[]"
                    value="{{ implode(', ', $comic->artists) }}" required>
                <small class="form-text text-muted">inserisci i nomi degli attori separati da uno spazio</small>
            </div>
            <div class="form-group">
                <label for="writers">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers[]"
                    value="{{ implode(', ', $comic->writers) }}" required>
                <small class="form-text text-muted">inserisci i nomi degli scrittori separati da uno spazio</small>
            </div>
            <button type="submit" class="btn btn-primary">Update Comic</button>
        </form>
    </div>
@endsection
