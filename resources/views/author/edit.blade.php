@extends('layout.app')

@section('content')

    <h2> Modifier l'auteur : {{ $author->name }}.</h2>
    <form action="{{ route('author.update', $author->id) }}" method="POST">
        @method("PUT")
        @csrf
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" value="{{ $author->first name }}" >
        <input type="text" id="name" name="name" value="{{ $author->last name }}" >
        <button type="submit">Confirmer le nom et prénoms de l'auteur.</button>
    </form>
@endsection