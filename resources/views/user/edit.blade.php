@extends('layouts.layout')

@section('content')

<form action="{{route('user.update',$user)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label><input type="text" name="name" id="name" value="{{$user->name}}"><br><br>
    <label for="email">email</label><input type="email" name="email" id="email" value="{{$user->email}}"><br><br>
    <label for="password">password</label><input type="password" name="password" id="password" value="{{$user->password}}"><br><br>

    <label for="role">role :</label><br>
@foreach ($roles as $role)
<input type="checkbox" name="roles[]" id="roles" value="{{ $role->name }}" @if ($user->roles->contains($role->id)) checked @endif>
<label for="roles">{{ $role->name }}</label>
@endforeach
    <input type="submit" value="update">
</form>

@endsection
