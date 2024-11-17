<!-- resources/views/roles/edit.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Éditer le Rôle</h1>

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom du rôle</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Permissions</label>
                <div class="form-check">
                    @foreach($permissions as $permission)
                        <div>
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="permissions[]"
                                value="{{ $permission->name}}"
                                id="permission_{{ $permission->id }}"
                                @if($role->permissions->contains($permission->id)) checked @endif
                            >
                            <label class="form-check-label" for="permission_{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
    </div>
@endsection
