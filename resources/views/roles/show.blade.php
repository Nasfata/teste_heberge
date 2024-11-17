<!-- resources/views/roles/show.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Détails du Rôle</h1>

        <div class="mt-4 card">
            <div class="card-header">
                <h2>{{ $role->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Permissions:</strong></p>
                <ul>
                    @foreach($role->permissions as $permission)
                        <li>{{ $permission->name }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Éditer</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?');">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
