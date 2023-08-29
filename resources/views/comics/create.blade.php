@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Comic</h1>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="thumb"> URL foto</label>
                <input type="text" class="form-control" id="thumb" name="thumb" required>
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="form-group">
                <label for="sale_date">Uscita in sala</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="artists">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists[]" required>
                <small class="form-text text-muted">inserisci i nomi degli attori separati da uno spazio</small>
            </div>
            <div class="form-group">
                <label for="writers">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers[]" required>
                <small class="form-text text-muted">inserisci i nomi degli scrittori separati da uno spazio</small>
            </div>
            <button type="submit" class="btn btn-primary">Crea Comic</button>
        </form>
    </div>
@endsection
