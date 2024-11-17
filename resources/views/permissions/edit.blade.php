<!-- resources/views/permissions/edit.blade.php -->

@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <h1>Éditer la Permission</h1>

        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $permission->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description (Optionnel)</label>
                <textarea name="description" class="form-control" id="description">{{ $permission->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
    </div>
@endsection
