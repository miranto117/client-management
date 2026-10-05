@extends('layouts.app')
 
@section('title', 'Liste des clients')
 
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Liste des clients</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Ajouter Client</a>
    </div>
 
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                        @if($client->photo)
                            <img src="{{ asset('photos/' . $client->photo) }}" alt="{{ $client->name }}" width="100">
                        @else
                            Pas de photo
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
