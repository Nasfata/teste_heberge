<!-- resources/views/roles/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Créer un nouveau Rôle</h1>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom du rôle</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Permissions</label>
                <div class="form-check">
                    @foreach($permissions as $permission)
                        <div>
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="permission_{{ $permission->id }}">
                            <label class="form-check-label" for="permission_{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @endforeach


                </div>
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </div>
@endsection
