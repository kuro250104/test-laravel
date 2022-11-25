@extends('layout.app')

@section('content')

    <h2> Modifier le genre : {{ $genre->genre }}.</h2>
    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @method("PUT")
        @csrf
        <label for="genre"> Genre</label>
        <input type="text" id="Genre" name="genre" value="{{ $genre->genre }}" >
        <button type="submit">Confirmer le nom du genre</button>
    </form>
@endsection