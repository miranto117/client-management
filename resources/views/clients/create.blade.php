@extends('layouts.app')

@section('title', 'Ajouter un client')

@section('content')
<h1>Ajouter un nouveau client</h1>

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter Client</button>
</form>
@endsection