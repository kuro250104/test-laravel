@extends('layout.app')

@section('content')
    <h2>Informations sur l'auteurs {{ $author->name }} </h2>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Prénoms</th>
                    <th>Noms</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->first name }}</td>
                    <td>{{ $author->last name }}</td>
                    <td>{{ $author->created_at }}</td>
                    <td>{{ $author->updated_at }}</td>
                </tr>
            </tbody>
        </table>
@endsection