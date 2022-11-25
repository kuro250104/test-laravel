@extends('layout.app')

@section('content')

    <h2> Ajouter ici un nouveau genre </h2>
    <form action="{{ route('genre.store') }}" method="POST">
        @csrf
        <label for="genre"> Genre</label>
        <input type="text" id="genre" name="genre" >
        <button type="submit">Ajouter ici votre genre</button>
    </form>
@endsection