<!-- resources/views/permissions/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Créer une nouvelle Permission</h1>

        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description (Optionnel)</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </div>
@endsection
