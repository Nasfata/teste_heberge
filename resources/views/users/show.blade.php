<!-- resources/views/users/show.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Détails de l'Utilisateur</h1>

        <div class="mt-4 card">
            <div class="card-header">
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Rôles:</strong>
                    @if($user->roles->isNotEmpty())
                        <ul>
                            @foreach($user->roles as $role)
                                <li>{{ $role->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <span>Aucun rôle attribué</span>
                    @endif
                </p>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Éditer</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
