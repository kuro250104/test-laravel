@extends('layout.app')

@section('content')

    <h2> Ajouter ici un nouveau livre </h2>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" >
        <button type="submit">Ajouter ici votre livre</button>
    </form>
@endsection