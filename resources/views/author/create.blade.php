@extends('layout.app')

@section('content')

    <h2> Ajouter ici un nouvel auteur </h2>
    <form action="{{ route('author.store') }}" method="POST">
        @csrf
        <label for="name">Prénoms</label>
        <input type="text" id="name" name="first name" > <br>
        <label for="name">Noms</label>
        <input type="text" id="name" name="last name" >
        <button type="submit">Ajouter ici votre auteur</button>
    </form>
@endsection