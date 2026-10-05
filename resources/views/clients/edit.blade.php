@extends('layouts.app')
 
@section('title', 'Modifier un Client')
 
@section('content')
    <h1>Modifier le Client</h1>
 
    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ $client->name }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" name="phone" class="form-control" value="{{ $client->phone }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control">
            @if($client->photo)
                <img src="{{ asset('photos/' . $client->photo) }}" alt="{{ $client->name }}" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Mettre à Jour</button>
    </form>
@endsection