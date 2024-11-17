@extends('layouts.layout')

@section('content')

<form action="{{route('permission.update',$permission)}}" method="post">
    @csrf
    @method('PUT')
    <label for="title">title</label><input type="text" name="name" id="title" value="{{$permission->name}}">
    <input type="submit" value="update">
</form>

@endsection
