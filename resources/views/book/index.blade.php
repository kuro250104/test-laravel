@extends('layout.app')

@section('content')
<h2>Liste des livres</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Noms</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>
                        <a href="#">Voir</a>
                        <a href="#">Modifier</a>
                        <form action="#" method="POST">
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection