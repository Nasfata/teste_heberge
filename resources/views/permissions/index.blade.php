<!-- resources/views/permissions/index.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Liste des Permissions</h1>
        <a href="{{ route('permissions.create') }}" class="btn btn-primary">Créer une Permission</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning">Éditer</a>
                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette permission ?');">Supprimer</button>
                            </form>
                            <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info">Voir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
