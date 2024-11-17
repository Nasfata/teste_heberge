@extends('layouts.layout')

@section('content')

<form action="{{route('role.update',$role)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name</label><input type="text" name="name" id="title" value="{{$role->name}}"><br><br>
    <label for="permission">Permission :</label><br>
@foreach ($permissions as $permission)
<input type="checkbox" name="permission[]" id="permission" value="{{ $permission->name }}" @if ($role->permissions->contains($permission->id)) checked

@endif>
<label for="permission">{{ $permission->name }}</label>
@endforeach
    <input type="submit" value="update">
</form>

@endsection
