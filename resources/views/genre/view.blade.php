@extends('layout.app')

@section('content')
    <h2>Informations sur le genre {{ $genre->name }} </h2>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Genres</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td>{{ $genre->genre }}</td>
                    <td>{{ $genre->created_at }}</td>
                    <td>{{ $genre->updated_at }}</td>
                </tr>
            </tbody>
        </table>
@endsection