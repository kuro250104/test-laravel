@extends('layout.app')

@section('content')
    <h2>Informations sur le livre {{ $book->name }} </h2>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Noms</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>{{ $book->updated_at }}</td>
                </tr>
            </tbody>
        </table>
@endsection