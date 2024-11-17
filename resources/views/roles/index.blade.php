<!-- resources/views/roles/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">

        <h1>Liste des Rôles</h1>
        <a href="{{ route('roles.create') }}" class="btn btn-primary">Créer un Rôle</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Éditer</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?');">Supprimer</button>
                            </form>
                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info">Voir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
