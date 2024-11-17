<!-- resources/views/permissions/show.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Détails de la Permission</h1>

        <div class="mt-4 card">
            <div class="card-header">
                <h2>{{ $permission->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $permission->description ?? 'Aucune description' }}</p>
                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning">Éditer</a>
                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette permission ?');">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
