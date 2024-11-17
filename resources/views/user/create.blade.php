<!--ghjk-->

@extends('layouts.layout')

@section('content')
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <label for="name">Name</label><input type="text" name="name" id="name"><br><br>
    <label for="email">email</label><input type="email" name="email" id="email"><br><br>
    <label for="password">password</label><input type="password" name="password" id="password"><br><br>
    <label for="role">Role:</label><br>
    @foreach ($roles as $role)
    <input type="checkbox" name="roles[]" id="roles" value="{{ $role->name }}"><label for="roles">{{ $role->name }}</label>

    @endforeach

    <input type="submit" value="creer">
</form>
@endsection
