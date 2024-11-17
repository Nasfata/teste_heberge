@extends('layouts.layout')

@section('content')

<form action="{{route('role.store')}}" method="post">
    @csrf
    <label for="title">Name</label><input type="text" name="name" id="title"><br><br>
    <label for="permission">Permissions:</label><br>
    @foreach ($permissions as $permission)
    <input type="checkbox" name="permission[]" id="permission" value="{{ $permission->name }}">
    <label for="permission">{{ $permission->name }}</label>
    @endforeach
    <input type="submit" value="creer">
</form>

@endsection
