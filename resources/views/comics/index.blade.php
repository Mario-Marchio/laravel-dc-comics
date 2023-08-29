@extends('layout')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea un nuovo Comic</a>
        <ul>
            @foreach ($comics as $comic)
                <li><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
